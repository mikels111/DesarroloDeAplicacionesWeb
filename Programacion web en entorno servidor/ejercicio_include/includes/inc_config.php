<?php
if (isset($_POST['tema'])) {
    setcookie('tema', $_POST['tema']);
    echo '<meta http-equiv="refresh" content="0.1; url="' . $_COOKIE['ultima_pagina'] . '">';
}
?>
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
function recogerVar($variable, $mail = false)
{
    $variable = trim($variable);
    $variable = stripslashes($variable);
    $variable = htmlspecialchars($variable);

    if (strlen($variable) > 0) {
        if (is_numeric($variable)) {
            return false;
        } else {
            if ($mail) {
                if (filter_var($variable, FILTER_VALIDATE_EMAIL)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        }
    } else {
        return false;
    }
}

function recogerPassword($password_form)
{
    if (strlen($password_form) > 0) {
        if (is_numeric($variable)) {
            return false;
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
function registro2($nombre, $apellidos, $correo, $password)
{
    // Conexion a la base de datos con MySQLi
    $servername = "localhost";
    $username = "usuario1";
    $passw = "usuario1";
    $dbname = "Mikels";

    // Create connection
    $conn = mysqli_connect($servername, $username, $passw, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $sql = "INSERT INTO usuarios (nombre, apellidos, email, password)
    VALUES ('" . $nombre . "', '" . $apellidos . "', '" . $correo . "','" . $password . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
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

use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/autoload.php';

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
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'mikelseara11@gmail.com';
    $mail->Password = '';
    $mail->setFrom('mikelseara11@gmail.com', 'mikel');
    // $mail->addReplyTo('mikelseara11@gmail.com', 'mikel');
    $mail->addAddress($_POST['mail'], 'mikel');
    $mail->Subject = 'Testing PHPMailer';
    $mail->msgHTML($mensaje);
}

?>