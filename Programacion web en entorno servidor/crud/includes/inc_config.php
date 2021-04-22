<?php

// composer require sentry/sdk;
// Sentry\init(['dsn' => 'https://c45868751ba046648f972d80481db36a@o573209.ingest.sentry.io/5723488' ]);
// throw new Exception("My first Sentry error!");

if (isset($_POST['tema'])) {
    setcookie('tema', $_POST['tema']);
    echo '<meta http-equiv="refresh" content="0.1; url="' . $_COOKIE['ultima_pagina'] . '">';
}
?>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/<?php if (isset($_COOKIE['tema'])) {
                                        echo $_COOKIE['tema'];
                                    } else {
                                        echo 'estilos.css';
                                    } ?>">
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">


<?php
//Patterns para los campos de registro
$password_pattern = "/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/"; // https://www.coding.academy/blog/how-to-use-regular-expressions-to-check-password-strength
$user_pattern = "/^[A-Za-z][A-Za-z0-9]{5,31}$/";
$fecha_pattern = "/^[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])$/";
$number_pattern = "/[0-9]{9}/";

function filter($variable)
{
    $variable = trim($variable);
    $variable = stripslashes($variable);
    $variable = htmlspecialchars($variable);
    return $variable;
}

function recogerVar($variable, $mail = false, $telf = false, $fecha_nac = false)
{
    if (strlen($variable) > 0) {
        if (is_numeric($variable)) {
            if ($telf) {
                return true;
            } else {
                return false;
            }
        } else {
            if ($mail) {
                if (filter_var($variable, FILTER_VALIDATE_EMAIL)) {
                    return true;
                } else {
                    return false;
                }
            } else if ($fecha_nac) {
                return true;
            } else {
                return true;
            }
        }
    } else {
        return false;
    }
}

// function recogerPassword($password_form)
// {
//     if (strlen($password_form) > 0) {
//         if (is_numeric($variable)) {
//             return false;
//         }
//     } else {
//         return false;
//     }
// }
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

// Registro con PDO
function registro($nombre, $apellidos, $correo, $password)
{
    $insert = "INSERT INTO usuarios(nombre,apellidos,email,password) VALUES ('" . $nombre . "','" . $apellidos . "','" . $correo . "','" . $password . "')";
    $consulta = "SELECT * FROM usuarios WHERE email='" . $correo . "'";
    $consulta2 = "SELECT * FROM usuarios WHERE nombre='" . $nombre . "'";
    try {
        include("includes/pdo/conexion.php");
        //  La variable $mbd está en conexion.php
        $result = $mbd->query($consulta);
        $result2 = $mbd->query($consulta2);
        // https://stackoverflow.com/questions/33795123/php-header-redirect-with-parameter-->(Para hacer redireccion con parametros)
        if ($result->rowCount() > 0) {
            echo "Dirección de correo electronico en uso ";
            return false;
        } else {
            if ($result2->rowCount() > 0) {
                echo "Nombre de usuario en uso";
                return false;
            } else {
                if ($mbd->query($insert) == true) {
                    return true;
                } else {
                    return false;
                }
            }
        }

        $mbd = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
// Registro con MySQLi

function registro2($nombre, $apellidos, $correo, $password, $usuario, $fecha, $telefono)
{
    try {

        // Conexion a la base de datos con MySQLi
        $servername = "localhost";
        $username = "usuario1";
        $passw = "usuario1";
        $dbname = "Mikels";

        // Create connection
        $conn = mysqli_connect($servername, $username, $passw, $dbname);

        // Check connection
        // if (!$conn) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }

        // REGISTRO

        // Crear un token para la confirmacion de la cuenta
        $token_confirmacion = bin2hex(random_bytes((20 - (20 % 2)) / 2));

        // DateTime para guardar en la BD la fecha de alta
        $fecha_alta = new DateTime();
        $fecha_format = $fecha_alta->format('Y/m/d');

        // Variables para saber si el usuario y el email existen en la BD
        $correct_nombre = true;
        $correct_mail = true;

        // Sentencias SQL para consultar si el usuario y el correo existen
        $sql = "SELECT * FROM usuarios WHERE login='" . $usuario . "'";
        $sql2 = "SELECT * FROM usuarios WHERE email='" . $correo . "'";

        // Se guardan los resultados de las consultas de arriba^ en variables
        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);

        // Si alguna de las consultas devuelven más de una fila es que ya está en la BD
        if ($result->num_rows > 0) {
            echo "Ese usuario ya existe";
            $correct_nombre = false;
        }
        if ($result2->num_rows > 0) {
            echo "Esa dirección de correo electronico ya existe";
            $correct_mail = false;
        }
        // Si el usuario y el email no estan registrados en la BD se procede con la inserción
        if ($correct_nombre and $correct_mail) {
            $sql = "INSERT INTO usuarios (nombre, apellidos, email, password, login, fecha_nacimiento, num_tlf, token, estado, fecha_alta)
        VALUES ('" . $nombre . "', '" . $apellidos . "', '" . $correo . "','" . $password . "','" . $usuario . "','" . $fecha . "','" . $telefono . "','" . $token_confirmacion . "','N','" . $fecha_format . "')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Registro completado</p>";
                header("Location: registro_enviado.php?email=" . $correo . "&token=" . $token_confirmacion);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location: registro.php?registro=" . true);
            }
        } else {
            header("Location: registro.php?registro=" . false);
        }
        $conn->close();
    } catch (PDOException $e) {
        header("Location: registro.php?registro=" . true);
    }
}

setcookie("ultima_pagina", $_SERVER['REQUEST_URI'], time() + 60 * 60 * 24 * 30);


if ($_SERVER['REQUEST_URI'] == "/mikels/ejercicio_include/index.php") {
    if (isset($_COOKIE['contador'])) {
        $cont = $_COOKIE['contador'] + 1;
        setcookie("contador", $cont);
    } else {
        setcookie("contador", 1);
    }
}


$correofrom = "mikelseara11@gmail.com";
$para = "mikelseara25@gmail.com";
$titulo = "hola";



if (isset($_POST['nombre']) and isset($_POST['mail'])) {
    $mensaje = '
        <html>
        <head>
          <title>Correo enviado mediante la orden mail</title>
        </head>
        <body>
        <p></p>
          <header style="background:rgb(221, 230, 231);"><span style="margin-left:50%; padding-top:2em; padding-bottom:2em;">Mikel Seara</span></header>
          <main style="width:50%; margin:auto;">Estimad@ ' . $_POST['nombre'] . ' <br> hemos recibido su solicitud de información</main>
          <footer style="background:rgb(116, 116, 116);">Copyrigth | Mikel Seara</footer>
         </body>
        </html>
        ';
}

use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/autoload.php';
function mail_phpMailer($correo, $mensaje)
{

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'mikelseara89@gmail.com';
    $mail->Password = '1121rsnm';
    $mail->setFrom('mikelseara89@gmail.com', 'mikel');
    // $mail->addReplyTo('mikelseara11@gmail.com', 'mikel');
    $mail->addAddress($correo, 'mikel');
    $mail->Subject = 'Confirmar registro';
    $mail->msgHTML($mensaje);
    if ($mail->send()) {
        return true;
    } else {
        return false;
    }
}
?>