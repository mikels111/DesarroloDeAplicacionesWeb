<?php

$servername = "localhost";
$username = "usuario1";
$passw = "usuario1";
$dbname = "Mikels";

// Create connection
$conn = mysqli_connect($servername, $username, $passw, $dbname);

if (empty($_REQUEST['login']) || empty($_REQUEST['email'])) {
    header("Location: index.php?insert=" . false);
} else {
    $correct_nombre = true;
    $correct_mail = true;

    $sql = "SELECT * FROM usuarios WHERE login='" . $_REQUEST['login'] . "'";
    $sql2 = "SELECT * FROM usuarios WHERE email='" . $_REQUEST['email'] . "'";

    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0) {
        header("Location: index.php?insert=" . false);
        $correct_nombre = false;
    }
    if ($result2->num_rows > 0) {
        header("Location: index.php?insert=" . false);
        $correct_mail = false;
    }

    $insert_nombre = $_REQUEST['nombre'];
    $insert_login = $_REQUEST['login'];
    $insert_apellidos = $_REQUEST['apellidos'];
    $insert_email = $_REQUEST['email'];
    $insert_password = $_REQUEST['password'];
    $insert_tipo = $_REQUEST['tipo'];
    $insert_nacimiento = $_REQUEST['fecha_nacimiento'] == '' ? '9999-01-01' : $_REQUEST['fecha_nacimiento'];
    $insert_rol = $_REQUEST['rol'];
    $insert_num = $_REQUEST['num_tlf'] == '' ? 000000000 : $_REQUEST['num_tlf'];
    $insert_alta = $_REQUEST['fecha_alta'] == '' ? '9999-01-01' : $_REQUEST['fecha_alta'];
    $insert_estado = $_REQUEST['estado'];
    $insert_token = $_REQUEST['token'];
    $insert_fecha_token = $_REQUEST['fecha_token'] == '' ? '9999-01-01' : $_REQUEST['fecha_token'];

    if ($correct_nombre and $correct_mail) {
        // $sql = "INSERT INTO usuarios VALUES('','$insert_nombre','$insert_login','$insert_apellidos','$insert_email','$insert_password','$insert_tipo','$insert_nacimiento','$insert_rol',$insert_num,'$insert_alta','$insert_estado','$insert_token','$insert_fecha_token') ";
        $sql = "INSERT INTO usuarios(nombre,login,apellidos,email,password,tipo,fecha_nacimiento,rol,num_tlf,fecha_alta,estado,token,fecha_token) VALUES('$insert_nombre','$insert_login','$insert_apellidos','$insert_email','$insert_password','$insert_tipo','$insert_nacimiento','$insert_rol',$insert_num,'$insert_alta','$insert_estado','$insert_token','$insert_fecha_token') ";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?insert=" . true);
        } else {
            header("Location: index.php?insert=" . false);
        }
    }
}




// include('includes/conexion.php');


// $sql = "SELECT * FROM usuarios WHERE login='" . $_REQUEST['login'] . "'";
// $sql2 = "SELECT * FROM usuarios WHERE email='" . $_REQUEST['email'] . "'";

// // Se guardan los resultados de las consultas de arriba^ en variables
// $result = $db->query($sql);
// $result2 = $db->query($sql2);
// $fecha = $_REQUEST['fecha_nacimiento'];

// // Si alguna de las consultas devuelven más de una fila es que ya está en la BD
// // try {

// if ($result->rowCount() > 0 or $result2->rowCount() > 0) {
//     header("Location: index.php?insert=" . false);
// } else {
//     $sql = "INSERT INTO usuarios(nombre,login,apellidos,email,password,tipo,fecha_nacimiento,rol,num_tlf,fecha_alta,estado,token,fecha_token) VALUES('$insert_nombre','$insert_login','$insert_apellidos','$insert_email','$insert_password','$insert_tipo','$insert_nacimiento','$insert_rol',$insert_num,'$insert_alta','$insert_estado','$insert_token','$insert_fecha_token') ";
//     if ($db->query($sql)) {
//         // header("Location: index.php?insert=" . true);
//         echo "usuario insertado";
//     } else {
//         echo "usuario no insertado";
//         // header("Location: index.php?inse=" . $fecha . "&insert=" . false);
//     }
// }
//} catch (PDOException $e) {
//     print "¡Error!: "  . "<br/>";
//     header("Location: index.php?inse=fallo&insert=" . false . $e->getMessage());
// }
/*
$sql = "INSERT INTO usuarios(nombre,login,apellidos,email,password,tipo,fecha_nacimiento,rol,num_tlf,fecha_alta,estado,token,fecha_token) VALUES('" . $_REQUEST['nombre'] . "','" . $_REQUEST['login'] . "','" . $_REQUEST['apellidos'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['password'] . "','" . $_REQUEST['tipo'] . "','" . $_REQUEST['fecha_nacimiento'] . "','" . $_REQUEST['rol'] . "'," . $_REQUEST['num_tlf'] . ",'" . $_REQUEST['fecha_alta'] . "','" . $_REQUEST['estado'] . "','" . $_REQUEST['token'] . "','" . $_REQUEST['fecha_token'] . "') ";
*/
