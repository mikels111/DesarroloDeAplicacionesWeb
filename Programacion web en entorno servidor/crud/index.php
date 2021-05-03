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
    if (isset($_GET['excel'])) {
        $filename = 'Usuario_' . date("Ymdhis") . '.xls';
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");
    }
    include('includes/conexion.php');

    if (isset($_REQUEST['update'])) {
        if ($_REQUEST['update']) {
            echo "<h2>actualizado</h2>";
        } else {
            echo "<h2>No actualizado</h2>";
        }
    } else if (isset($_REQUEST['insert'])) {
        if ($_REQUEST['insert']) {
            echo "<h2>Usuario insertado</h2>";
        } else {
            echo "<h2>Usuario NO insertado</h2>";
        }
    }
    ?>
    <table style="border:1px solid;">
        <?php
        $sql = 'SELECT * FROM usuarios';
        $result = $db->query($sql);
        $result_fetch_all = $result->fetchAll(PDO::FETCH_ASSOC);
        $id = "";


        include("includes/columnas.html");
        include("includes/config.php");
        $var_json = borrar($id);
        foreach ($result_fetch_all as $fila) {
            ?>
            <tr>
                <?php
                    foreach ($fila as $key => $value) {
                        echo "<td style='border:1px solid;'>$value</td>";
                        if ($key == 'id') {
                            $id = $value;
                        }
                    }
                    ?>
                <td><a href='insert_update.php?id=<?php echo $id ?>'>Editar</a></td>
                <td><button onclick="
                let confirm = window.confirm('¿Estas seguro de que quieres borrar el registro?');
                if (confirm){
                    borrar(<?php echo $id ?>);
                }">Borrar</button></td>
                <!-- https://code.tutsplus.com/es/tutorials/how-to-call-a-php-function-from-javascript--cms-36508 -->
            </tr>
        <?php } ?>
    </table>
    <p><a href="insert_update.php">Insertar</a></p>
    <p><a href="index.php?excel=s">Generar Excel</a></p>
    
    <script>
        function borrar(id) {
            $.ajax({
                method: "POST",
                url: "borrar.php",
                data: {
                    id: id
                }
            }).done(function(msg) {
                window.location="index.php";
            });
        }
    </script>
</body>

</html>