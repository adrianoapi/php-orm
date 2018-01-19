<?php

require __DIR__ . '/vendor/autoload.php';

use App\ORM\Model;

// Instanciando model
$model = new Model;
echo $model->setDriver('mysql');
