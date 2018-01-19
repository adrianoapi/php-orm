<?php

require __DIR__ . '/vendor/autoload.php';

use App\ORM\Model;
use App\ORM\Drivers\MysqlPdo;

// Conexão
$pdo = new PDO('mysql:host=localhost;dbname=php_orm', 'root', '');
$driver = new MysqlPdo($pdo);
$driver->setTable('users');

// Execução com o driver
$driver->exec('truncate users;');

// Instanciando model
$model = new Model;
$model->setDriver($driver);

// Inserção de registros
$model->name = "Katia";
$model->age = 28;
$model->email = "katia@hotmail.com";
$model->save();

// Busca registros
var_dump($model->findAll());

// Seleciona um registro
var_dump($model->findFirst(1));
