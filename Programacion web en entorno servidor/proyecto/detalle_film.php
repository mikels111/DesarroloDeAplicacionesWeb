<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('includes/inc_head.php') ?>
</head>

<body>
    <?php
    include('includes/inc_nav.php');
    include('includes/conexion.php');
    ?>
    <div class="ms-main">
        <div class="ms-content">
            <?php

            if (isset($_REQUEST['id'])) {
                $sql_peli_detalle = "SELECT titulo FROM pelicula WHERE id_moviedb=" . $_REQUEST['id'];
                $result = $conn->query($sql_peli_detalle);
                print_r($result->num_rows);
                var_dump($result);
                foreach ($result as $key => $value) {
                    echo "$key->$value";
                }
                ?>
                <div class="ms-detalle">
                    <h2>Película</h2>
                    <hr>
                    <div class="ms-detalle-film">
                        <img class="ms-peli_detalle" src="" alt="poster">
                    </div>

                </div>
            <?php } else {
                echo "<h2>Pelicula no encontrada</h2>";
                ?>

            <?php }
            ?>


        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>