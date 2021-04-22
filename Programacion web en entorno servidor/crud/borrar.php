<?php
include('includes/conexion.php');
$sql='DELETE FROM usuarios WHERE id='.$_REQUEST['id'];
if($db->query($sql)){
    echo "Usuario borrado";
    header("Location: index.php");
}
