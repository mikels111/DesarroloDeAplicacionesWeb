<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Server</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <div id="main_container">
        <main>
            <?php
            $direcciones['172.17.11.23'] = "Lander";

            $direcciones['172.17.11.2'] = "AnderM";

            $direcciones['172.17.11.8'] = "AnderG";

            $direcciones['172.17.11.16'] = "Kevin";

            $direcciones['172.17.11.17'] = "MikelU";

            $direcciones['172.17.11.12'] = "Elizabeth";

            $direcciones['172.17.11.18'] = "Orlando";

            $direcciones['172.17.11.6'] = "Richard";

            $direcciones['172.17.11.11'] = "Rafael";

            $direcciones['172.17.11.9'] = "Arantza";

            $direcciones['172.17.11.5'] = "Sergio";

            $direcciones['172.17.11.15'] = "Imanol";

            $direcciones['172.17.11.20'] = "MikelS";

            $direcciones['172.17.15.6'] = "Alberto";

            // 'HTTP_USER_AGENT'
            // Para el navegador, sistema operativo
            //

            //echo $_SERVER['HTTP_USER_AGENT'];
            //echo"<br><br> posicion-->". substr($_SERVER['HTTP_USER_AGENT'], 80,5);

            if (stripos($_SERVER['HTTP_USER_AGENT'], "chrome") > 0) {
                echo "<br>Tu navegador es Chrome ";
            }
            if (stripos($_SERVER['HTTP_USER_AGENT'], "firefox") > 0) {
                echo "<br>Tu navegador es Firefox ";
            }
            if (stripos($_SERVER['HTTP_USER_AGENT'], "Edg") > 0) {
                echo "<br>Tu navegador es Edge ";
            }

            if (stripos($_SERVER['HTTP_USER_AGENT'], "Windows")) {
                echo "<br>Tu Sistema operativo es Windows";
            }


            // REMOTE_ADDR'
            // La dirección IP desde la cual está viendo la página actual el usuario.
            echo "<br>Tu direccion ip es: --> " . $_SERVER['REMOTE_ADDR'];


            // HTTP_ACCEPT_LANGUAGE'
            // Contenido de la cabecera Accept-Language: de la petición actual, si existe. Por ejemplo: 'en'.


            echo "<br> Los lenguajes son: " . substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, -6);

            //REQUEST_TIME'
            // Fecha Unix de inicio de la petición. Disponible desde PHP 5.1.0.
            echo "<br>La hora del servidor es: " . date('d-m-Y H:i:s', $_SERVER['REQUEST_TIME']);

            //El nombre del usuario
            if (isset($direcciones[$_SERVER['REMOTE_ADDR']])) {
                echo "<br>tu nombre es:" . $direcciones[$_SERVER['REMOTE_ADDR']];
            } else {
                echo "estas accediendo desde fuera de mi red";
            }












            ?>

        </main>

        
    </div>
</body>

</html>