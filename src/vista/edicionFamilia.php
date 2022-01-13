<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <title>Editar familia</title>
</head>

<body>
    <header>
        <div class="cabecera">
            <h1>DWES</h1>
            <p>Práctica familias</p>
        </div>
    </header>

    <nav>
        <ol>
            <li><a href="../vista/altaFamilia.php">Alta</a></li>
            <li><a href="../action/listarFamilias.php">Listado</a></li>
        </ol>
    </nav>

    <div class="contenedor">
        <form action="../action/editarFamilia.php" method="POST">
            <fieldset>
                <legend>Editar familia</legend>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" placeholder="<?= $familia->nombre ?>"><br>
                <input type="submit" value="Enviar">
                <input type="hidden" name="cod" value="<?= $familia->cod ?>">
                <fieldset>
        </form>
    </div>
</body>

</html>