<?php
include('includes/conexion.php');

if (isset($_REQUEST['id'])) {
    $sql = "SELECT * FROM usuarios WHERE id='" . $_REQUEST['id'] . "'";
    
    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
        $sql = "UPDATE usuarios SET nombre='" . $_REQUEST['nombre'] . "',login='" . $_REQUEST['login'] . "',apellidos='" . $_REQUEST['apellidos'] . "',email='" . $_REQUEST['email'] . "',password='" . $_REQUEST['password'] . "',tipo='" . $_REQUEST['tipo'] . "',fecha_nacimiento='" . $_REQUEST['fecha_nacimiento'] . "',rol='" . $_REQUEST['rol'] . "',num_tlf=" . $_REQUEST['num_tlf'] . ",fecha_alta='" . $_REQUEST['fecha_alta'] . "',estado='" . $_REQUEST['estado'] . "',token='" . $_REQUEST['token'] . "',fecha_token='" . $_REQUEST['fecha_token'] . "' WHERE id=" . $_REQUEST['id'];
        echo $sql;
        if ($db->query($sql)) {
            // header("Location: index.php?sql=hecho&update=" . true);
            echo "correcto";
        } else {
            // header("Location: index.php?sql=nohecho&update=" . false);
            echo "incorrecto";
        }
    } else {
        header("Location: index.php?update=" . false);
    }
}
