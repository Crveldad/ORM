<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <title>Listado de familias</title>
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
            <li><a href="listarFamilias.php" class="activo"">Listado</a></li>
        </ol>
    </nav>

    <div class="lista">
        <ol>
            <?php
                foreach ($familias as $familia) {
                echo "<li>" . $familia->nombre . " | <a href='/action/cargarFamilia.php?cod=" . $familia->cod . "'>Editar</a> | <a href='/action/borrarFamilia.php?cod=" . $familia->cod . "'>Borrar</a></li>";
                }
            ?>
        </ol>
    </div>
</body>

</html>