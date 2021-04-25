<?php
include('includes/conexion.php');

if (isset($_REQUEST['id'])) {
    $sql = "SELECT * FROM usuarios WHERE id='" . $_REQUEST['id'] . "'";

    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
        $correct_nombre = true;
        $correct_mail = true;

        $sql = "SELECT * FROM usuarios WHERE login='" . $_REQUEST['login'] . "'";
        $sql2 = "SELECT * FROM usuarios WHERE email='" . $_REQUEST['email'] . "'";

        $result = $db->query($sql);
        $result2 = $db->query($sql2);

        if ($result->rowCount() > 0) {
            header("Location: index.php?insert=" . false);
            $correct_nombre = false;
        }
        if ($result2->rowCount() > 0) {
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


        $sql = "UPDATE usuarios SET nombre='$insert_nombre',login='$insert_login',apellidos='$insert_apellidos',email='$insert_email',password='$insert_password',tipo='$insert_tipo',fecha_nacimiento='$insert_nacimiento',rol='$insert_rol',num_tlf=$insert_num,fecha_alta='$insert_alta',estado='$insert_estado',token='$insert_token',fecha_token='$insert_fecha_token' WHERE id=" . $_REQUEST['id'];
        echo $sql;
        if ($db->query($sql)) {
            header("Location: index.php?sql=hecho&update=" . true);
        } else {
            header("Location: index.php?sql=nohecho&update=" . false);
        }
    } else {
        header("Location: index.php?update=" . false);
    }
} else {
    header("Location: index.php?update=" . false);
}
