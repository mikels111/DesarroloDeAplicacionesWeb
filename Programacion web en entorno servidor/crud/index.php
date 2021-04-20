<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
</head>

<body>
    <?php
    include('includes/conexion.php');


    // print_r($array_result);
    ?>
    <table>
        <?php
        $sql = 'SELECT * FROM usuarios';
        $result = $db->query($sql);
        $result_fetch_all = $result->fetchAll(PDO::FETCH_ASSOC);
        $cadena = "";
        $id = "";

        include("includes/columnas.html");
        foreach ($result_fetch_all as $fila) {
            $last_item = array_key_last($fila);
            $cadena = "";
            echo "<tr>";
            foreach ($fila as $key => $value) {
                echo "<td>$value</td>";
                if ($key == 'id') {
                    $id = $value;
                }
            }
            echo "
            <td><a href='insert_update.php?id=" . $id . "'>Editar</a></td>
            <td><a href='insert_update.php'>Borrar</a></td>

            </tr>";
        }
        ?>

    </table>
    <p><a href="insert_update.php">Insertar</a></p>
    <p><a href="excel.php">Generar Excel</a></p>
</body>

</html>