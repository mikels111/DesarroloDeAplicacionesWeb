<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Server</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <main>
        <?php
        // 172.17.11.23 = Lander

        // 172.17.11.2 = Ander M

        // 172.17.11.8 = Ander G

        // 172.17.11.16 = Kevin

        // 172.17.11.17 = MikelU

        // 172.17.11.12 = Elizabeth

        // 172.17.11.18 = Orlando

        // 172.17.11.6 = Richard

        // 172.17.11.11 = Rafael

        // 172.17.11.9 = Arantza

        // 172.17.11.5 = Sergio

        // 172.17.11.15 = Imanol

        // 172.17.11.20 = MikelS

        // 172.17.15.6 = Alberto

        // 'HTTP_USER_AGENT'
        // Para el navegador, sistema operativo
        //
        echo $_SERVER['HTTP_USER_AGENT'];
        echo"<br><br> posicion-->". substr($_SERVER['HTTP_USER_AGENT'], 80,-14);

        if(stripos($_SERVER['HTTP_USER_AGENT'], "chrome")>0){
            echo "<br>Tu navegador es Chrome ";
        }else if(stripos($_SERVER['HTTP_USER_AGENT'], "firefox")>0){
            echo "<br>Tu navegador es Firefox ";
        }
        

        // REMOTE_ADDR'
        // La dirección IP desde la cual está viendo la página actual el usuario.
        echo "Tu ip --> " . $_SERVER['REMOTE_ADDR'];

        // 'SERVER_ADDR'
        // La dirección IP del servidor donde se está ejecutando actualmente el script.



        // HTTP_ACCEPT_LANGUAGE'
        // Contenido de la cabecera Accept-Language: de la petición actual, si existe. Por ejemplo: 'en'.

        //EQUEST_TIME'
        // Fecha Unix de inicio de la petición. Disponible desde PHP 5.1.0.

        ?>

    </main>

    <?php include("includes/inc_pie.php"); ?>
</body>

</html>