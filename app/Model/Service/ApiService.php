<?php

// app/Model/Service/ApiService.php
namespace App\Model\Service;

use App\Model\ApiModel;
use Nette\Database\Context;

class ApiService {
    private $apiModel;
    private $database;
    private $wwwDir;

    public function __construct(ApiModel $apiModel) {
        $this->apiModel = $apiModel;
    }

    public function storeApiInfo($url, $name, $username, $password) {
        // Get the current date and time
        $createdAt = date('Y-m-d H:i:s');
    
        // Store the API information in the 'api' table along with the created_at value
        $this->apiModel->insert(['url' => $url, 'name' => $name, 'username' => $username, 'password' => $password, 'created_at' => $createdAt]);
    }

    public function getAllApis()
    {
        return $this->apiModel->getAll();
    }

    public function getApiById($apiId)
    {
        // Use the selection to fetch the API by ID
        return $this->apiModel->getApiById($apiId);
    }
}

