<?php

// app/Model/DocModel.php
namespace App\Model;

use Nette\Database\Context;

class DocModel
{
    private $table;

    public function __construct(Context $context)
    {
        $this->table = $context->table('doc');
    }

    public function insert(array $data)
    {
        return $this->table->insert($data);
    }
    
    public function where($column, $value)
    {
        return $this->table->where($column, $value);
    }
    
    public function getTable()
    {
        return $this->table;
    }
}
