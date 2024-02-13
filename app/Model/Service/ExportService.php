<?php

namespace App\Model\Service;

use App\Model\DocModel;
use App\Model\ApiModel;

class ExportService {
    private $docModel;
    private $apiModel;

    public function __construct(DocModel $docModel, ApiModel $apiModel) {
        $this->docModel = $docModel;
        $this->apiModel = $apiModel;
    }

    public function exportInvoicesToApi($apiUrl, $username, $password)
    {
        $errors = []; // Initialize an array to collect errors

        try {
            $invoices = $this->docModel->getTable('doc')->fetchAll();

            foreach ($invoices as $invoice) {
                try {
                    $formattedData = $this->prepareInvoiceData($invoice);
                    $this->sendJsonDataToApi($apiUrl, $username, $password, $formattedData);
                } catch (\Exception $e) {
                    // Collect errors for individual invoices
                    $errors[] = $e->getMessage();
                }
            }

            return $errors; // Return the collected errors
        } catch (\Exception $e) {
            // This catches more general errors, if any
            $errors[] = 'General export error: ' . $e->getMessage();
            return $errors;
        }
    }

    private function prepareInvoiceData($invoice)
    {
        // Decode the existing JSON data from your database
        $invoiceData = json_decode($invoice->data, true);

        // Prepare the data with the required structure
        $formattedData = [
            "winstrom" => [
                "@version" => "1.0",
                "faktura-vydana" => [$invoiceData] // Wrap the invoice data within the "faktura-vydana" array
            ]
        ];

        return $formattedData; // Return the formatted data
    }

    private function sendJsonDataToApi($apiUrl, $username, $password, $jsonData)
    {
        $ch = curl_init($apiUrl); // Initialize cURL session

        // Setup HTTP basic authentication
        $headers = [
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password")
        ];

        // Set cURL options for POST request and include the JSON data
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));

        // Execute the POST request
        $response = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new \Exception("cURL error: $error");
        }

        curl_close($ch);

        if ($statusCode !== 200) {
            throw new \Exception("Failed to send JSON data to API. Status code: $statusCode. Response: $response");
        }

        return true;
    }
}


