<?php

include_once "../eloquent.php";

use Dwes\ORM\Tienda;

Tienda::destroy($_GET["cod"]);

include "listarTiendas.php";
//header("Location: listarTiendas.php");