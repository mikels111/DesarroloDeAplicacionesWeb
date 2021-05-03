<?php
// actualizar peli
include('includes/conexion.php');
$sql = "SELECT * FROM pelicula WHERE id=" . $_POST['id'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($object = $result->fetch_object()) {
        if ($object->estado == 'A') {
            $sql = "UPDATE pelicula SET estado='I' WHERE id=" . $_POST['id'];
            $conn->query($sql);
        } else {
            $sql = "UPDATE pelicula SET estado='A' WHERE id=" . $_POST['id'];
            $conn->query($sql);
        }
    }
}
