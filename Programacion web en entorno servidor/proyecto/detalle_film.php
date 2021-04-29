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
                $sql_peli_detalle = "SELECT titulo,poster FROM pelicula WHERE id_moviedb=" . $_REQUEST['id'];
                $result = $conn->query($sql_peli_detalle);
                $titulo=$poster="";
                while ($object=$result->fetch_object()) {
                    $titulo=$object->titulo;
                    $poster=$object->poster;
                }

                ?>
                <div class="ms-detalle">
                    <h2 class="ms-detalle-titulo"><?php echo $titulo?></h2>
                    <hr>
                    <div class="ms-detalle-film">
                        <img class="ms-peli_detalle" src="https://image.tmdb.org/t/p/w500<?php echo $poster?>" alt="poster">
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