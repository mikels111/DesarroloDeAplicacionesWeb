<?php
include('../includes/conexion.php');
if (isset($_REQUEST['id'])) {
    $titulo = $_REQUEST['titulo'];
    $genero = $_REQUEST['genero'];
    $duracion = $_REQUEST['duracion'];
    $clasificacion = $_REQUEST['clasificacion'];
    $estado = $_REQUEST['estado'] == '' ? 'A' : $_REQUEST['estado'];
    $fecha_estreno = $_REQUEST['fecha_estreno']== '' ? '9999-01-01' : $_REQUEST['fecha_estreno'];
    $poster = $_REQUEST['poster'];

    $sql = "UPDATE pelicula SET titulo='$titulo', genero='$genero', duracion=$duracion, clasificacion='$clasificacion', estado='$estado', fecha_estreno='$fecha_estreno', poster='$poster' WHERE id=" . $_REQUEST['id'];

    if ($conn->query($sql)) {
        header('Location: lista_peliculas.php?update=' . true);
    } else {
        header('Location: lista_peliculas.php?update=' . false);
    }
}
