<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <main>
        <?php

        $nombreError = $mailError = $annoError = $hmError = '';
        $email_form = $nombre_form = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            /* recoger variables del formulario */
            $verformulario = false;
            $nombre = recogerVar($_POST['nombre']);
            $email = recogerVar($_POST['email']);
            $anno = recogerVarNum($_POST['ano']);
            //..
            /* validar variables */

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $mailError = "<span class='error'>Email Incorrecto </span>";
                $email_form = $_POST['email'];
                $nombre_form = $_POST['nombre'];
                $verformulario = true;
            }


            // if(si esta mal el nombre){

            // }

            if ($nombre == false) {
                $nombreError = "<span class='error'>Nombre incorrecto</span>";
            }
            if ($email == false) {
                $mailError = "<span class='error'>Email incorrecto</span>";
            }
            if ($anno == false) {
                $annoError = "<span class='error'>Año incorrecto</span>";
            }
            if (!isset($_POST['hm'])) {
                $hmError = "<span class='error'>Sexo incorrecto</span>";
            }
            if ($nombre == false || $email == false || $anno == false || !isset($_POST['hm'])) {
                $email_form = $_POST['email'];
                $nombre_form = $_POST['nombre'];
                $verformulario = true;
            }
        } else {
            /* inicializar variables formulario */
            $nombre_form = '';
            $email_form = '';
            $verformulario = true;
        }

        function recogerVar($variable)
        {
            $variable = trim($variable);
            if (strlen($variable) > 0) {
                if(is_numeric ($variable)){
                    return false;
                }else{
                    return true;
                }
            } else {
                return false;
            }
        }
        function recogerVarNum($numero)
        {
            $numero = trim($numero);
            if (is_numeric($numero)) {
                if ($numero >= 1900 && $numero <= 2003) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        if ($verformulario == true) {
            ?>
            <?php include("includes/inc_formulario.php"); ?>

        <?php
        } else {
            echo "Formulario ok";
        }
        ?>


    </main>

    <?php include("includes/inc_pie.php"); ?>
</body>

</html>