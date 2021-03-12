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
    <div id="main_container">
        <main>
            <?php

            $nombreError = $mailError = $annoError = $hmError = '';
            $email_form = $nombre_form = $anno_form = $hm_form = '';
            $anoi = 1900;
            $anof = 2003;
            $html = '';
            $css = '';
            $js = '';
            $php = '';
            $java = '';
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                /* recoger variables del formulario */
                $verformulario = false;

                $nombre = recogerVar($_POST['nombre']);
                $email = recogerVar($_POST['email']);
                $anno = recogerVarNum($_POST['ano']);
                $hm = true;
                $nacido = $_POST['nacido'];

                //..
                /* validar variables */


                foreach ($_POST as $key => $value) {
                    if ($key == $value) {
                        $$key = "checked";
                    }
                }

                if ($nombre == false) {
                    $nombreError = "<span class='error'>Nombre incorrecto</span>";
                }
                if ($email == false) {
                    $mailError = "<span class='error'>Email incorrecto</span>";
                } else {
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $mailError = "<span class='error'>Email Incorrecto </span>";
                        $email = false;
                    }
                }
                if ($anno == false) {
                    $annoError = "<span class='error'>Año incorrecto</span>";
                }
                if (!isset($_POST['hm'])) {
                    $hmError = "<span class='error'>Sexo incorrecto</span>";
                    $_POST['hm'] = "m";
                    $hm = false;
                } else {
                    if ($_POST['hm'] <> "m" && $_POST['hm'] <> "h") {
                        $hmError = "<span class='error'>Sexo incorrecto</span>";
                        $hm = false;
                    }
                }
                if ($nombre == false || $email == false || $anno == false || $hm == false) {
                    $nombre_form = $_POST['nombre'];
                    $email_form = $_POST['email'];
                    $anno_form = $_POST['ano'];
                    $hm_form = $_POST['hm'];
                    $verformulario = true;
                }
            } else {
                /* inicializar variables formulario */
                $nombre_form = '';
                $email_form = '';
                $verformulario = true;
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

        
    </div>
</body>

</html>