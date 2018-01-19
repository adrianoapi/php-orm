<?php

require __DIR__ . '/vendor/autoload.php';

use App\ORM\Model;
use App\ORM\Drivers\MysqlPdo;

// Conex�o
$pdo = new PDO('mysql:host=localhost;dbname=php_orm', 'root', '');
$driver = new MysqlPdo($pdo);
$driver->setTable('users');

// Instanciando model
$model = new Model;
$model->setDriver($driver);

// Inser��o de registros
$model->name = "Adriano";
$model->age = 30;
$model->email = "sdcomputadores@gmail.com";
$model->save();
