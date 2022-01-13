<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <title>Alta de tienda</title>
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
            <li><a href="altaTienda.php" class="activo">Alta</a></li>
            <li><a href="../action/listarTiendas.php">Listado</a></li>
        </ol>
    </nav>

    <div class="contenedor">
        <form action="../action/crearTienda.php" method="POST">
            <fieldset>
                <legend>Alta de tienda</legend>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" placeholder="nombre"><br>
                <label for="tlf">Teléfono: </label>
                <input type="text" name="tlf" id="tlf" placeholder="teléfono"><br>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </div>

</body>

</html>