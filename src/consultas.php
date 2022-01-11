<?php

include "eloquent.php";
// Todas las tiendas, a partir del modelo
$tiendasM = Tienda::all();
// Todas las tiendas mediante QueryBuilder (más rápido)
$tiendasQB = Tienda::get();
// Tienda por PK
$tienda = Tienda::find(1);
// Tienda por PK, si no lo encuentra lanza ModelNotFoundException
$tienda = Tienda::findOrFail(1);
// 5 primeras tiendas con tlf 600100100 ordenadas por nombre
$tiendasMovil = Tienda::where("tlf", "600100100")->orderBy("nombre")
    ->take(5)->get();
// Primera tienda con tlf 600100100
$tiendaMovil = Tienda::firstWhere("tlf", "600100100");
// Cantidad de tiendas
$count = Tienda::where("tlf", "600100100")->count();


print_r($tienda->nombre);

$familiasM = Familia::all();

print_r($familiasM);