<?php

// app/Model/ApiVersionModel.php
namespace App\Model;

use App\Model\Entity\ApiVersion;
use Nette\Database\Context;

class ApiVersionModel extends \Nette\Database\Table\Selection
{
    public function __construct(Context $context)
    {
        parent::__construct('api_version', $context);
    }
}

