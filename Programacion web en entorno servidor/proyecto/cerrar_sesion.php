<?php
session_start();
session_destroy();
if (isset($_COOKIE['admin'])) {
    unset($_COOKIE['admin']);
    // Para borrar un cookie hay que caducarla, si al time() le restamos cualquier numero significa que está caducada
    setcookie('admin', '', time() - 100);
}
header('Location: index.php');
