<?php
include('includes/conexion.php');

$sql = "SELECT * FROM usuarios WHERE login='" . $_REQUEST['login'] . "'";
$sql2 = "SELECT * FROM usuarios WHERE email='" . $_REQUEST['email'] . "'";

// Se guardan los resultados de las consultas de arriba^ en variables
$result = $conn->query($sql);
$result2 = $conn->query($sql2);

// Si alguna de las consultas devuelven más de una fila es que ya está en la BD

if ($result->num_rows > 0 or $result2->num_rows > 0) {
    header("Location: index.php?insert=" . false);
} else {
    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
        $sql = "INSERT INTO usuarios VALUES(nombre='" . $_REQUEST['nombre'] . "',login='" . $_REQUEST['login'] . "',apellidos='" . $_REQUEST['apellidos'] . "',email='" . $_REQUEST['email'] . "',password='" . $_REQUEST['pasword'] . "',tipo='" . $_REQUEST['tipo'] . "',fecha_nacimiento='" . $_REQUEST['fecha_nacimiento'] . "',rol='" . $_REQUEST['rol'] . "',num_tlf=" . $_REQUEST['num_tlf'] . ",fecha_alta='" . $_REQUEST['fecha_alta'] . "',estado='" . $_REQUEST['estado'] . "',token='" . $_REQUEST['token'] . "',fecha_token='" . $_REQUEST['fecha_token'] . "') ";
        if ($db->query($sql)) {
            header("Location: index.php?insert=" . true);
        } else {
            header("Location: index.php?insert=" . false);
        }
    } else {
        header("Location: index.php?insert=" . false);
    }
}
