<!DOCTYPE html>
<html lang="es">

<head><?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respuesta</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <main>
        <h1>Respuesta</h1>
        <?php

        



        // echo $nombre;
        // $anno = date('d/m/y');
        // echo "<p>$anno</p>";
        //$html = "";$css = "";$js = "";$hm = "";$genero = "";$php="";
        if (isset($_REQUEST["html"])) {
            $html = "html";
        } else {
            $html = null;
        }
        if (isset($_REQUEST["css"])) {
            $css = "css";
        } else {
            $css = null;
        }
        if (isset($_REQUEST["js"])) {
            $js = "js";
        } else {
            $js = null;
        }
        if (isset($_REQUEST["php"])) {
            $php = "php";
        } else {
            $php = null;
        }
        if (isset($_REQUEST["java"])) {
            $java = "java";
        } else {
            $java = null;
        }


        // foreach ($_POST as $key => $value) {
        //     $$key = $value;
        //     echo "<p>$key=$value</p>";
        // }

        if (isset($_REQUEST["hm"])) {
            if ($_REQUEST["hm"] == "m") {
                $genero = "a";
            } else {
                $genero = "o";
            }
        } else {
            $genero = "m";
        }

        echo "<p>Bienvenid" . $genero . " esperamos que disfrutes</p>";
        if ($html == "html" || $css == "css" || $js == "js") {
            echo "Tomamos nota de su solicitud de trabajo para diseñador";
        }
        if ($php == "php" || $java == "java") {
            echo "<p>Tomamos nota de su solicitud de trabajo para diseñador y programador</p>";
        }
        echo "<p>Enviaremos las novedades al correo " . $_REQUEST['email'] . " que nos ha suministrado. Saludos, Dpto atención cliente</p>";

        // $para      = $_REQUEST['email'];
        // $titulo    = 'Contacto';
        // $mensaje   = "Hola " . $_REQUEST["email"] ." ...";
        // $cabeceras = 'From: mikelseara11@gmail.com' . "\r\n" .
        //     'Reply-To: mikelseara11@gmail.com' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // mail($para, $titulo, $mensaje, $cabeceras);
        ?>
    </main>

    <?php include("includes/inc_pie.php"); ?>
</body>

</html>