<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    include('includes/conexion.php');
    if (isset($_REQUEST['id'])) { ?>
        <form action="update.php" method="get">
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>">
            <?php include('includes/formulario.php'); ?>
            <input type="submit" value="Continuar">
        </form>
    <?php } else { ?>
        <form action="insert.php" method="get">
            <?php include('includes/formulario.php'); ?>
            <input type="submit" value="Continuar">
        </form>
    <?php }


    ?>

</body>

</html>