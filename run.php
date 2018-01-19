<?php

require __DIR__ . '/vendor/autoload.php';

use App\ORM\Model;
use App\ORM\Drivers\MysqlPdo;

// Conexão
$pdo = new PDO('mysql:host=localhost;dbname=php_orm', 'root', '');
$driver = new MysqlPdo($pdo);

// Instanciando model
$model = new Model;
