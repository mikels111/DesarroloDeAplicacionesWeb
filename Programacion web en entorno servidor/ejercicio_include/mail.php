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

    <?php include("includes/inc_cabecera.php");

    // $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    // $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // // Cabeceras adicionales
    // $cabeceras .= 'From: ' . $correofrom . "\r\n";
    // $cabeceras .= 'X-Mailer: PHP' . phpversion() . "\r\n";
    // $mensaje = '
    //     <html>
    //     <head>
    //       <title>Correo enviado mediante la orden mail</title>
    //     </head>
    //     <body>
    //       <header style="background:rgb(221, 230, 231);"><span style="margin-left:50%; padding-top:2em; padding-bottom:2em;">Mikel Seara</span></header>
    //       <main style="width:50%; margin:auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure deleniti vel eveniet sapiente nostrum excepturi ratione mollitia, eos optio voluptatum asperiores ipsa accusamus incidunt, laboriosam, magni delectus aspernatur. Saepe, repellendus.</main>
    //       <footer style="background:rgb(116, 116, 116);">Copyrigth | Mikel Seara</footer>
    //      </body>
    //     </html>
    //     ';
    // mail($para, $titulo, $mensaje, $cabeceras);
    ?>

    <div id="main_container">
        <main>
            <?php
            // if (!$mail->send()) {
            //     echo 'Mailer Error: ' . $mail->ErrorInfo;
            // } else {
            //     echo 'The email message was sent.';
            // }
            ?>
            <form action="envio.php" method="POST">
                <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
                <p>Email: <input type="email" name="mail" id="mail"></p>
                <button type="submit">Enviar</button>
            </form>
        </main>


    </div>
</body>

</html>