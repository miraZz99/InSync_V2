<?php

namespace App\Model\Service;

use App\Model\DocModel;
use Nette\Database\Table\Selection;
class ImportService
{
    private $docModel;

    public function __construct(DocModel $docModel)
    {
        $this->docModel = $docModel;
    }

    public function importFromUpgates($jsonData)
    {
        // Check if $jsonData is a valid JSON string
        if (!is_string($jsonData)) {
            // Handle the error or return an appropriate response
            return;
        }

        // Decode the JSON string into an associative array
        $data = json_decode($jsonData, true);

        $paymentMapping = [
            'Bankovní převod' => 'prevod',
            'Hotově' => 'hotove',
            'Dobírka' => 'dobirka',
            'Česká pošta - Dobírka' => 'dobirka',
            'Kartou na pokladně' => 'platKart',
            'Hotově na pokladně' => 'hotove',
            'Cofidis' => 'jina',
            'Twisto' => 'jina',
            'Platba kartou, Apple Pay, Google Pay' => 'platKart',
            'Paypal' => 'platKart',
        ];
        // Check if the "invoices" key exists in the decoded data
        if (isset($data['invoices'])) {
            // Get the invoices array
            $invoices = $data['invoices'];

            // Create a new formatted array matching the provided structure
            $formattedData = [
                "winstrom" => [
                    "@version" => "1.0",
                    "faktura-vydana" => [],
                ],
            ];

            foreach ($invoices as $invoice) {
                // Map the fields from the original invoice to the desired structure
                $formattedInvoice = [
                    "kod" => $invoice['invoice_number'],
                    "id" => 'code:' . $invoice['invoice_number'],
                    "lastUpdate" => $invoice['creation_time'],
                    "typDokl" => "code:FAKTURA",
                    "cisObj" => $invoice['order_number'],
                    "cisSml" => $invoice['case_number'],
                    "mena" => 'code:' . $invoice['currency_id'],
                    "datUcto" => $invoice['date_of_vat_revenue_recognition'],
                    "varSym" => $invoice['variable_symbol'],
                    "formaUhrk" => 'formaUhr.' . $paymentMapping[$invoice['payment']],
                    "stavUhrK" => $invoice['paid_yn'] ? 'stavUhr.uhrazenoRucne' : '',
                    "datUhr" => $invoice['paid_date'],
                    "sumCelkZakl" => $invoice['total_with_vat'],
                    "sumZklZakl" => $invoice['total_without_vat'],
                    "sumDphZakl" => $invoice['recapitulation_vats_total']['vat'],
                    "kontaktJmeno" => $invoice['customer']['name'],
                    "kontaktEmail" => $invoice['customer']['email'],
                    "kontaktTel" => $invoice['customer']['phone'],
                    "ulice" => $invoice['customer']['street'],
                    "mesto" => $invoice['customer']['city'],
                    "psc" => $invoice['customer']['zip'],
                    "stat" => 'code:' . strtoupper($invoice['customer']['country_id']),
                    "bezPolozek" => "true",
                    "typUcOp" => "code:TRŽBA ZBOŽÍ",
                    "popis" => "Tržba za prodané zboží",
                ];

                // // Check if an invoice with the same name already exists
                // $existingInvoice = $this->docModel->where('name', $formattedInvoice['id']);
                // if ($existingInvoice) {
                //     // Handle the case when the invoice already exists
                //     continue;
                // }
                // Add the formatted invoice to the array
                $formattedData["winstrom"]["faktura-vydana"][] = $formattedInvoice;

                // Save the formatted invoice to the database
                $this->docModel->insert([
                    'data' => json_encode($formattedInvoice),
                    'name' => $formattedInvoice['id']
                ]);
            }

            // Check if the "faktura-vydana" array is empty
            if (empty($formattedData["winstrom"]["faktura-vydana"])) {
                unset($formattedData["winstrom"]["faktura-vydana"]);
            }

            // You can optionally encode the formatted data back to JSON if needed
            $formattedJson = json_encode($formattedData);

            // Now, you can use $formattedJson as needed
            // For example, save it to the database using $this->docModel->insert(['data' => $formattedJson]);
        }
    }
}
