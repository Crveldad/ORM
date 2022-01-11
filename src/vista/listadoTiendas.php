<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>ol {list-style-type: upper-roman;}</style>
    <title>Listado de tiendas</title>
</head>

<body>
    <h1>Listado de tiendas</h1>

    <ol>
        <?php
        foreach ($tiendas as $tienda) {
            echo "<li>" . $tienda->nombre . " <a href='/action/cargarTienda.php?cod=".$tienda->cod."'>Editar</a> <a href='/action/borrarTienda.php?cod=".$tienda->cod."'>Borrar</a></li>";
        }
        ?>
    </ol>
</body>

</html>