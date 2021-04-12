<?php
if (isset($_POST['tema'])) {
    setcookie('tema', $_POST['tema']);
    echo '<meta http-equiv="refresh" content="0.1; url="' . $_COOKIE['ultima_pagina'] . '">';
}
if (!isset($_COOKIE['tema'])) {
    setcookie('tema', "estilos.css");
    // echo "--------->".$_SERVER['REQUEST_URI'];
    // echo '<meta http-equiv="refresh" content="0.1; url=http://212.142.193.210:16001/"' . $_SERVER['REQUEST_URI'] . '">';
}
?>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/<?php echo $_COOKIE['tema'] ?>">
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

function registro($nombre, $apellidos, $correo, $password)
{
    include("includes/pdo/conexion.php");
    $query = "INSERT INTO USUARIOS(nombre,email) VALUES ('mikel','mikelseara11@gmail.com')";
    // $mbd=query($query);
    try {
        $consulta=$mbd->prepare($query);
        $consulta->execute();
        var_dump($consulta);

        // echo $consulta;
        // foreach ($mbd->query($query) as $fila) {
        //     echo "resultados " . count($fila);
        //     if ($fila == 0) {
        //         echo "no resultados";
        //     } else {
        //         foreach ($fila as $key => $valor) {
        //             echo "<p>$key = $valor</p>";
        //         }
        //     }
        //     // echo "fila-->".$fila;
        //     // echo "mbd-->".$mbd;
        //     // echo "-->" . count($mbd->query($query));

        // }


        //echo $mbd;
        $mbd = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    // try {
    //     foreach ($mbd->query($query) as $fila) {
    //         echo '<tr style="border:solid;border-width: thin;">';
    //         ///* bloque foreach 
    //         foreach ($fila as $key => $valor) {
    //             echo "<td style='border:solid;border-width: thin;'>$key = $valor</td>";
    //         }
    //         //fin bloque foreach */

    //         /*  vista en tabla
    //     echo '<td>' . $fila['id'] . '</td><td>' .  $fila['nombre'] . '</td><td>' .$fila['ip'] . '</td><td>' .$fila['fecha'] . '</td><td>' . $fila['horaini'] . '</td><td>' . $fila['idusuario'] . '</td>';

    //     echo '</tr>';
    //     */
    //         //print_r ($fila);
    //     }
    // } catch (\Throwable $th) {
    //     //throw $th;
    // }
}

setcookie("ultima_pagina", $_SERVER['REQUEST_URI'], time() + 60 * 60 * 24 * 30);

if (!isset($_COOKIE['contador'])) {
    setcookie("contador", 0);
}

if ($_SERVER['REQUEST_URI'] == "/mikels/index.php") {
    $cont = $_COOKIE['contador'] + 1;
    setcookie("contador", $cont);
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