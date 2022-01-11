<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de tienda</title>
</head>

<body>
    <h1>Alta de tienda</h1>

    <form action="../action/crearTienda.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="tlf">Teléfono: </label>
        <input type="text" name="tlf" id="tlf"><br>
        <input type="submit" value="Enviar consulta">
    </form>
</body>

</html>