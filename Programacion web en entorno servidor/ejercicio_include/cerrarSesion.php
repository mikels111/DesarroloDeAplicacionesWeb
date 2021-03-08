<?php
session_start();
if (!isset($_SESSION["ip"])) {
    /* desviamos a la página de error sesion */
    header("location:caducada.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    session_destroy();
    ?>
    <h1>Sesion cerrada</h1>
</body>

</html>