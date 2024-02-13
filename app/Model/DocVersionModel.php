<?php

// app/Model/DocVersionModel.php
namespace App\Model;

use Nette\Database\Context;

class DocVersionModel
{
    /** @var \Nette\Database\Table\Selection */
    private $table;

    public function __construct(Context $context)
    {
        // Use the $context to get the explorer and then create the selection
        $this->table = $context->table('doc_version');
    }

    public function getAll()
    {
        // Example method, you can add other methods based on your needs
        return $this->table->fetchAll();
    }
}


