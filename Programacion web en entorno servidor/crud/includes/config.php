<?php

function borrar($id_borrar)
{
    echo "<script>alert();</script>";
    $dbname = 'Mikels';
    $usuario = 'usuario1';
    $clave = 'usuario1';
    $db_borrar = new PDO('mysql:host=localhost;dbname=' . $dbname, $usuario, $clave);
    $sql_borrar = "DELETE FROM usuarios WHERE id='" . $id_borrar . "'";
    $db_borrar->query($sql_borrar);
    $db_borrar = null;
}
