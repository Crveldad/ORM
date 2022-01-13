<?php

include_once "../eloquent.php";

use Dwes\ORM\Familia;

$familias = Familia::all();

include "../vista/listadoFamilias.php";