<?php

// app/Model/ExporterModel.php
namespace App\Model;

use App\Model\Entity\Exporter;
use Nette\Database\Context;

class ExporterModel extends \Nette\Database\Table\Selection
{
    public function __construct(Context $context)
    {
        parent::__construct('exporter', $context);
    }
}
