<?php

use Dwes\ORM\Tienda;

include_once "../eloquent.php";

$codigo = $_GET["cod"];
$tienda = Tienda::find($codigo);

include "../vista/edicionTienda.php";

// select de una tienda 