<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tienda</title>
</head>

<body>
    <h1>Editar tienda</h1>

    <form action="../action/editarTienda.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="tlf">Teléfono: </label>
        <input type="text" name="tlf" id="tlf"><br>
        <input type="submit" value="Enviar consulta">
        <input type="hidden" name="cod" value="<?=$tienda->cod?>">
        </form>
</body>

</html>