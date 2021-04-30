<?php
include('includes/conexion.php');
if (isset($_POST['usuario']) and isset($_POST['password'])) {
    if (!empty($_POST['usuario']) || !empty($_POST['password'])) {
        // select en base de datos 
        $user = $_POST['usuario'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM usuarios WHERE login='$user' AND password='$password'";
        if (($conn->query($sql))->num_rows > 0) { // sí existe el usuario(query)
            $sql = "SELECT * FROM usuarios WHERE login='$user' AND rol='A'";
            if (($conn->query($sql))->num_rows > 0) { // el usuario es admin(query)
                // redirigir a index con login a true y user = "admin"
                $_SESSION['']//crear variable de sesion (github hace con cookie)
                header('Location: index.php');
            } else {
                // redirigir a index con variable de login a true
            }
        } else { // no existe el usuario
            echo "Usuario incorrecto";// redirigir a login con variable de login a false
        }
    } else {
        header('Location: login.php?login=' . false);
    }
} else {
    header('Location: login.php?login=' . false);
}
