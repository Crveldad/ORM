<?php

include_once "../eloquent.php";

use Dwes\ORM\Familia;

$familia = new Familia();
$familia->nombre = $_POST["nombre"];
$familia->tlf = $_POST["tlf"];
$familia->save(); // inserta

include "listarFamilias.php";