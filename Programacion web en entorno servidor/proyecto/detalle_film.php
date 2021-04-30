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

            if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {
                $sql_peli_detalle = "SELECT id_moviedb,titulo,poster,clasificacion,duracion,genero,fecha_estreno FROM pelicula WHERE id_moviedb=" . $_REQUEST['id'];
                $result = $conn->query($sql_peli_detalle);
                if ($result->num_rows > 0) {
                    $titulo_original = $id_moviedb = $clasificacion = $duracion = $genero = $fecha_estreno = "";
                    while ($object = $result->fetch_object()) {
                        $titulo_original = $object->titulo;
                        $id_moviedb = $object->id_moviedb;
                        $clasificacion = $object->clasificacion;
                        $duracion = $object->duracion;
                        $genero = $object->genero;
                        $fecha_estreno = $object->fecha_estreno;
                    } //<--titulo_orginal, clasificacion, duracion, genero, fecha_estreno


                    // Poster y titulo
                    $url = "https://api.themoviedb.org/3/movie/$id_moviedb?api_key=98fee347b91da83932ea8b9daa0edece&language=es-ES"; //<--poster

                    $resultado = file_get_contents($url);
                    $json_peli1 = json_decode($resultado);

                    $poster = $json_peli1->poster_path;
                    $titulo = $json_peli1->title;

                    //Director y actores
                    $url2 = "https://api.themoviedb.org/3/movie/$id_moviedb/credits?api_key=98fee347b91da83932ea8b9daa0edece&language=es-ES"; //<--director, actores

                    $resultado2 = file_get_contents($url2);
                    $json_peli2 = json_decode($resultado2);

                    $cast = $json_peli2->cast;
                    $crew = $json_peli2->crew;

                    $director = $actores = "";
                    $i = 0;
                    foreach ($cast as $actor) {
                        if ($i != 10) {
                            if ($i != 0)
                                $actores = $actores . ', ';
                        } else
                            break;
                        $actores = $actores . $actor->name;

                        $i++;
                    }
                    foreach ($crew as $puesto) {
                        if (($puesto->job) == 'Director') {
                            $director = $puesto->name;
                        }
                    }


                    ?>
                    <div class="ms-detalle">
                        <h2 class="ms-detalle-titulo"><?php echo $titulo ?></h2>
                        <hr>
                        <div class="ms-detalle-film">
                            <img class="ms-peli_poster" src="https://image.tmdb.org/t/p/w500<?php echo $poster ?>" alt="poster">
                            <?php include('includes/inc_tabla_detalle.php'); //titulo_original,actores,director,clasificación,duración,genero y fecha_estreno 
                                    ?>
                        </div>


                    </div>
                <?php
                    } else {
                        echo "<h2>Película no encontrada</h2>";
                    }
                } else {
                    echo "<h2>Película no encontrada</h2>";
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