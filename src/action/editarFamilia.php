<?php

include_once "../eloquent.php";

use Dwes\ORM\Familia;

$codigo = $_POST["cod"];

$familia = Familia::find($codigo);

$familia->nombre = $_POST["nombre"];
$familia->tlf = $_POST["tlf"];

$Familia->save();

include "listarFamilias.php";