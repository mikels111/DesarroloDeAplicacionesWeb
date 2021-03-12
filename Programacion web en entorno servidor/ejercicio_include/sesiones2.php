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
    <div id="main_container">
        <main>

            <?php
            if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
                $_SESSION['nombre'] = $_POST['nombre'];
                $_SESSION['apellido'] = $_POST['apellido'];
            }
            $color1 = "class='apagado'";
            $color2 = "class='encendido'";
            $color3 = "class='apagado'";
            include("includes/inc_panel_sesiones.php");
            ?>
            <form action="sesiones3.php" method="POST">
                <p>Direccion: <input type="text" name="direccion" id="direc"></p>
                <p>CodPostal <input type="text" name="codpostal" id="postal"></p>
                <button type="submit" class="btn_sig_conf">Siguiente --></button>

            </form>
            <a href="sesiones.php"><button class="btn_sig_conf">
                    <-- Atras</button> </a> <a href="cerrarSesion.php"><button>Cerrar Session</button></a>

        </main>

        
    </div>
</body>

</html>