<?php

include_once "../eloquent.php";

use Dwes\ORM\Tienda;

$codigo = $_POST["cod"];

$tienda = Tienda::find($codigo);

$tienda->nombre = $_POST["nombre"];
$tienda->tlf = $_POST["tlf"];

$tienda->save();

include "listarTiendas.php";