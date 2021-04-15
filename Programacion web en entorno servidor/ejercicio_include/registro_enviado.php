<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Include</title>
</head>

<body>

    <?php include("includes/inc_cabecera.php"); ?>
    <div id="main_container">
        <main>
            <?php
            $mensaje = '<html>
            <head>
                <title>Correo enviado mediante la orden mail</title>
            </head>
                <body>
                    <p></p>
                    <header style="background:rgb(221, 230, 231);"></header>
                        <div style="padding-top:2em; padding-bottom:2em;"><h2>Confirmación de registro</h2></div>
                    </header>
                      <main style="width:50%; margin:auto;">
                        <h3>Para confirmar su registro haga click en este enlace: http://212.142.193.210:16001/mikels/ejercicio_include/registro_confirmar.php?token='.$_REQUEST["token"].'</h3>
                      </main>
                      <footer style="color:white;background:rgb(116, 116, 116);">Copyrigth | Mikel Seara</footer>
                </body>
            </html>';

            if(isset($_REQUEST['email'])){

                if(mail_phpMailer($_REQUEST['email'], $mensaje)){
                    echo "<h3>Hemos enviado un correo a:".$_REQUEST['email']."</h3>";
                }
            }
            ?>
        </main>


    </div>
    <?php include("includes/inc_pie.php") ?>
</body>

</html>