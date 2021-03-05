<?php session_start();
if (!isset($_SESSION["ip"])) {
    /* desviamos a la página de error sesion */
    header("location:caducada.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <main>

        <?php
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR']; // ip del usuario
        $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT']; // user-agent
        $color1 = "class='encendido'";
        $color2 = "class='apagado'";
        $color3 = "class='apagado'";
        ?>
        <?php include("includes/inc_panel_sesiones.php"); ?>

        <form action="sesiones2.php" method="POST">
            <p>Nombre: <input type="text" name="nombre" id="nomb"></p>
            <p>Apellidos <input type="text" name="apellido" id="ape"></p>
            <button type="submit" class="btn_sig_conf">Siguiente --></button>
        </form>
        
    </main>

    <?php include("includes/inc_pie.php"); ?>
</body>

</html>