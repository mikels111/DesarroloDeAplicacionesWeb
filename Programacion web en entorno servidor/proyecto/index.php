<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('includes/inc_head.php') ?>
</head>

<body>
    <?php include('includes/inc_nav.php') ?>
    <div class="ms-main">
        <div class="ms-content">
            <?php include('includes/carousel.php') ?>
            <span class="badge bg-primary titulo">
                <h4>Películas</h4>
            </span>

            <form class="ms-select-fecha" action="">
                <label for="fecha">Fecha:</label>
                <select name="fecha" id="fecha" class="form-select-sm">
                    <option value="fecha1">01-05-2021</option>
                    <option value="fecha1">06-05-2021</option>
                </select>
                <input type="submit" value="Filtrar">
            </form>

            <hr>
            <div id="ms-film-flexbox">
                <?php
                include('includes/conexion.php');
                $sql_select_peli = "SELECT id_moviedb,titulo,poster,clasificacion,duracion,genero FROM pelicula WHERE estado='A'";
                $result = $conn->query($sql_select_peli);

                if ($result->num_rows > 0) {
                    $ruta_imagenes = "https://image.tmdb.org/t/p/w500";
                    foreach ($result as $peli) { ?>
                        <div class="card" style="width: 12rem;">
                            <?php
                            $id_moviedb = "";
                            $poster = "";
                            $titulo = "";
                            $clasificación = "";
                            $duracion = "";
                            $genero = "";

                            foreach ($peli as $key => $value) {
                                if ($key == 'id_moviedb')
                                    $id_moviedb = $value;
                                else if ($key == 'clasificacion')
                                    $clasificación = $value;
                                else if ($key == 'duracion')
                                    $duracion = $value;
                                else if ($key == 'genero')
                                    $genero = $value;
                            }
                            $url = "https://api.themoviedb.org/3/movie/$id_moviedb?api_key=98fee347b91da83932ea8b9daa0edece&language=es-ES";
                            $resultado = file_get_contents($url);
                            $json_peli = json_decode($resultado);

                            $titulo = $json_peli->title;
                            $poster = $json_peli->poster_path;
                            $poster = $ruta_imagenes . $poster;

                            ?>

                            <img src="<?php echo $poster; ?>" class="img-fluid" alt="pelic">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $titulo; ?></h5>
                                <p class="card-text">
                                    <span class="badge bg-secondary"><?php echo $clasificación ?></span>
                                    <span class="badge bg-secondary"><?php echo $duracion . "min" ?></span>
                                    <span class="badge bg-secondary"><?php echo $genero ?></span>
                                </p>
                                <a href="detalle_film.php?id=<?php echo $id_moviedb ?>" class="btn btn-primary btn-horarios">Consultar horarios</a>
                            </div>
                            <?php ?>
                        </div>
                <?php }
                }
                ?>
            </div>
            <!-- fin flexbox -->

            <span class="badge bg-primary titulo">
                <h4 id="contacto">Contacto</h4>
            </span>

            <form class="ms-form-contacto">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <label for="experiencia">Experiencia en la página</label>
                <div id="experiencia" class="ms-radios-contacto">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Muy Buena
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Buena
                        </label>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>