<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <title>Listado de tiendas</title>
</head>

<body>
    <header>
        <div class="cabecera">
            <h1>DWES</h1>
            <p>Práctica tiendas</p>
        </div>
    </header>

    <nav>
        <ol>
            <li><a href="../vista/altaTienda.php">Alta</a></li>
            <li><a href="listarTiendas.php" class="activo"">Listado</a></li>
        </ol>
    </nav>

    <div class="lista">
        <ol>
            <?php
                foreach ($tiendas as $tienda) {
                echo "<li>" . $tienda->nombre . " | <a href='/action/cargarTienda.php?cod=" . $tienda->cod . "'>Editar</a> | <a href='/action/borrarTienda.php?cod=" . $tienda->cod . "'>Borrar</a></li>";
                }
            ?>
        </ol>
    </div>
</body>

</html>