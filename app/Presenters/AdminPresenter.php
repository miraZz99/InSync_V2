<?php declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use App\Model\Service\ImportService;
use App\Model\Service\ApiService;
use App\Model\Service\ExportService;

final class AdminPresenter extends Nette\Application\UI\Presenter
{
    private $importService;
    private $apiService;
    private $exportService;

    public function __construct(ImportService $importService, ApiService $apiService, ExportService $exportService) {
        parent::__construct();
        $this->importService = $importService;
        $this->apiService = $apiService;
        $this->exportService = $exportService;
    }

    public function startup() {
        parent::startup();

        if ($this->getUser()->isLoggedIn() === false && $this->getAction() !== 'signIn') {
            $this->flashMessage('Tato sekce není přístupná bez přihlášení', 'danger');
            $this->redirect('signIn');
        }
    }

    public function actionSignIn() {
        $this->setLayout('admin.signIn');
    }

    public function actionDashboard() {
        $apis = $this->apiService->getAllApis();
        $this->template->apis = $apis;
        $this->setLayout('admin');
    }

    public function actionSignOut() {
        $this->getUser()->logout();
        $this->flashMessage('Odhlášení proběhlo úspěšně.', 'success');
        $this->redirect('signIn');
    }

    protected function createComponentSignInForm(): Form {
        $form = new Form();
        $form->addText('username', 'Username');
        $form->addPassword('password', 'Password');
        $form->addSubmit('send', 'Sign In');
        $form->onSuccess[] = [$this, 'signInFormSuccess'];

        return $form;
    }

    public function signInFormSuccess(Form $form) {
        $values = $form->getValues();
        try {
            $this->getUser()->login($values->username, $values->password);
            $this->redirect('dashboard');
        } catch (Nette\Security\AuthenticationException $e) {
            $this->flashMessage($e->getMessage(), 'danger');
            $this->redirect('signIn');
        }
    }

    // Function to fetch JSON data from API with Basic Authentication
    private function fetchJsonDataFromApi($apiUrl, $username, $password) {
        $context = stream_context_create([
            'http' => [
                'header' => "Authorization: Basic " . base64_encode("$username:$password")
            ]
        ]);

        $jsonData = file_get_contents($apiUrl, false, $context);
        return $jsonData;
    }

    public function actionImport($apiId) {
        try {
            $api = $this->apiService->getApiById($apiId);
            $apiUrl = $api->url . '?creation_time_from=2023-1-12';
            $jsonData = $this->fetchJsonDataFromApi($apiUrl, $api->username, $api->password);
            $this->importService->importFromUpgates(json_decode($jsonData, true));

            $this->flashMessage('Import from API successful.', 'success');
        } catch (\Exception $e) {
            $this->flashMessage('Import from API failed: ' . $e->getMessage(), 'danger');
        }

        $this->redirect('dashboard');
    }

    public function actionStoreApiInfo() {
        try {
            $apiName = $this->getHttpRequest()->getPost('apiName');
            $apiUrl = $this->getHttpRequest()->getPost('apiUrl');
            $apiUsername = $this->getHttpRequest()->getPost('apiUsername');
            $apiPassword = $this->getHttpRequest()->getPost('apiPassword');

            $this->apiService->storeApiInfo($apiUrl, $apiName, $apiUsername, $apiPassword);
            $this->flashMessage('API information stored successfully.', 'success');
        } catch (\Exception $e) {
            $this->flashMessage('API information storage failed: ' . $e->getMessage(), 'danger');
        }

        $this->redirect('dashboard');
    }

    public function actionExportInvoices($apiId) {
        $api = $this->apiService->getApiById($apiId);
        if (!$api) {
            $this->flashMessage('API not found.', 'danger');
            $this->redirect('dashboard');
            return;
        }
    
        $createdCount = 0;
        $updatedCount = 0;
        $failedCount = 0;
        $errorMessages = [];
    
        $responses = $this->exportService->exportInvoicesToApi($api->url, $api->username, $api->password);
    
        foreach ($responses as $response) {
            // Assuming each $response is a JSON string as per your example.
            $decodedResponse = json_decode($response, true);
    
            if (isset($decodedResponse['winstrom'])) {
                if ($decodedResponse['winstrom']['success'] === "true") {
                    // Successfully processed; update counts based on the stats.
                    $stats = $decodedResponse['winstrom']['stats'];
                    $createdCount += (int) $stats['created'];
                    $updatedCount += (int) $stats['updated'];
                    $failedCount += (int) $stats['failed'];
                } else {
                    // Process failed operation messages
                    foreach ($decodedResponse['winstrom']['results'] as $result) {
                        if (isset($result['errors'])) {
                            foreach ($result['errors'] as $error) {
                                $errorMessages[] = $error['message'];
                            }
                        }
                    }
                    $failedCount++;
                }
            } else {
                $errorMessages[] = "Unexpected response structure: " . json_encode($decodedResponse);
            }
        }
    
        // Construct the summary message.
        $summaryMessage = "$createdCount invoices created, $updatedCount updated, $failedCount failed.";
        if (!empty($errorMessages)) {
            $summaryMessage .= " Errors: " . implode('; ', $errorMessages);
        }
    
        $this->flashMessage($summaryMessage, !empty($errorMessages) ? 'danger' : 'success');
        $this->redirect('dashboard');
    }
    
    
    


	
}

