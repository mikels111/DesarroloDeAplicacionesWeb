<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambio tema</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <main>
        <form method="POST">
            <button name="tema" value="estilos.css">tema 1</button>
            <button name="tema" value="estilos1.css">tema 2</button>
            <button name="tema" value="estilos2.css">tema 3</button>
            <button name="tema" value="estilos3.css">tema 4</button>
        </form>
    </main>
    <?php include("includes/inc_pie.php"); ?>
</body>

</html>