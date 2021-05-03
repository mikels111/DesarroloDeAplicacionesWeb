<?php
include('includes/conexion.php');
if (isset($_POST['usuario']) and isset($_POST['password'])) {
    if (!empty($_POST['usuario']) || !empty($_POST['password'])) {
        // select en base de datos 
        $user = $_POST['usuario'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM usuarios WHERE login='$user' AND password='$password'";

        if (($conn->query($sql))->num_rows > 0) { // sí existe el usuario(query)
            session_start();
            $_SESSION['loged_in'] = true; //crear variable de sesion
            $sql = "SELECT * FROM usuarios WHERE login='$user' AND rol='A'";
            if (($conn->query($sql))->num_rows > 0) { // el usuario es admin(query)
                $token = bin2hex(random_bytes((20 - (20 % 2)) / 2));
                setcookie('admin', $token, time() + 1 * 1 * 60 * 60);
            }
            header('Location: index.php');
        } else { // no existe el usuario
            header('Location: login.php?login='.false); // redirigir a login con variable de login a false
        }
    } else {
        header('Location: login.php?login=' . false);
    }
} else {
    header('Location: login.php?login=' . false);
}
