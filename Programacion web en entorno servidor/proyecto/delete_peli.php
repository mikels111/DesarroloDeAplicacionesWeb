<?php
include('includes/conexion.php');
$sql = "DELETE FROM pelicula WHERE id=" . $_POST['id'];
$conn->query($sql);