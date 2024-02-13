<?php declare(strict_types=1);

// app/Presenters/ImportPresenter.php
namespace App\Presenters;

use App\Model\Service\ImportService;

class ImportPresenter extends \Nette\Application\UI\Presenter {
    private $importService;

    public function __construct(ImportService $importService) {
        $this->importService = $importService;
    }

    public function actionDefault() {
        // Example: Get XML data from the request
        $url = 'https://test-18.t3.upgates.shop/export-orders-LOyyTKqKme.xml';
        $options = [
            'http' => [
                'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3\r\n",
            ],
        ];
        
        $context = stream_context_create($options);
        $xmlData = file_get_contents($url, false, $context);


        // Call the importFromUpgates method from ImportService
        $this->importService->importFromUpgates($xmlData);

        // You can add a response, redirect, or any other logic based on your requirements
        $this->sendJson(['status' => 'success', 'message' => 'Import completed']);
    }
}


