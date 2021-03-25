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

    <?php include("includes/inc_cabecera.php");?>

    <div id="main_container">
        <main>
            <?php
            if (!$mail->send()) {
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'The email message was sent.';
            }
            ?>
            
        </main>


    </div>
</body>

</html>