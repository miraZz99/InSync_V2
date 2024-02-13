<?php

// app/Model/ImporterModel.php
namespace App\Model;

use App\Model\Entity\Importer;
use Nette\Database\Context;

class ImporterModel extends \Nette\Database\Table\Selection
{
    public function __construct(Context $context)
    {
        parent::__construct('importer', $context);
    }
}
