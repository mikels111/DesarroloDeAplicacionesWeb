<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    include('includes/conexion.php');
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
    <p><a href="excel.php">Generar Excel</a></p>
    <script>
        function borrar(id) {
            $.ajax({
                method: "POST",
                url: "borrar.php",
                data: {
                    id: id
                }
            }).done(function(msg) {
                alert("Data Saved: " + msg);
            });
        }
        function editar(id){

        }
    </script>
</body>

</html>