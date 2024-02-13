<?php

// app/Model/ApiModel.php
namespace App\Model;

use Nette\Database\Context;

class ApiModel
{
    /** @var \Nette\Database\Table\Selection */
    private $table;

    public function __construct(Context $context)
    {
        // Use the $context to get the explorer and then create the selection
        $this->table = $context->table('api');
    }

    public function getAll()
    {
        // Example method, you can add other methods based on your needs
        return $this->table->fetchAll();
    }

    public function insert(array $data)
    {
        // Insert data into the 'api' table
        return $this->table->insert($data);
    }

        // ApiModel.php
    public function getApiById($apiId)
    {
        // Use the selection to fetch the API by ID
        return $this->table->get($apiId);
    }

}



