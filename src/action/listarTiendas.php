<?php

include_once "../eloquent.php";

use Dwes\ORM\Tienda;

$tiendas = Tienda::all();

include "../vista/listadoTiendas.php";