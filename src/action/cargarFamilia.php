<?php

use Dwes\ORM\Familia;

include_once "../eloquent.php";

$codigo = $_GET["cod"];
$familia = Familia::find($codigo);

include "../vista/edicionFamilia.php";