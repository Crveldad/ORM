<?php

include_once "../eloquent.php";

use Dwes\ORM\Familia;

Familia::destroy($_GET["cod"]);

include "listarFamilias.php";