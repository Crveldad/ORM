<?php

include_once "../eloquent.php";

use Dwes\ORM\Tienda;

$tienda = new Tienda();
$tienda->nombre = $_POST["nombre"];
$tienda->tlf = $_POST["tlf"];
$tienda->save(); // inserta

include "listarTiendas.php";