<?php
include "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver'   => 'mysql',
    'host'     => '7ab1e35155eb',
    'database' => 'dwes',
    'username' => 'root',
    'password' => '1234',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'   => '',
]);
// Permite el acceso mediante métodos estáticos
$capsule->setAsGlobal();
// Carga el framework
$capsule->bootEloquent();