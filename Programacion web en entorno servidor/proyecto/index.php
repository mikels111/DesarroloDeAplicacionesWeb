<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('includes/inc_head.php'); ?>
</head>

<body>
    <?php include('includes/inc_nav.php') ?>
    <div class="ms-main">
        <div class="ms-content">

            <?php include('includes/carousel.php') ?>
            <span class="badge bg-primary titulo">
                <h4 class="h4_titulo">Películas</h4>
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
                    $id_moviedb = $poster = $titulo = $clasificacion = $duracion = $genero = "";
                    while ($object = $result->fetch_object()) {
                        $id_moviedb = $object->id_moviedb;
                        $clasificacion = $object->clasificacion;
                        $duracion = $object->duracion;
                        $genero = $object->genero;
                        $titulo = $object->titulo;
                        $poster = $ruta_imagenes . $object->poster; ?>
                        <div class="card" style="width: 12rem;">
                            <?php
                                    // foreach ($peli as $key => $value) {
                                    //     if ($key == 'id_moviedb')
                                    //         $id_moviedb = $value;
                                    //     else if ($key == 'clasificacion')
                                    //         $clasificación = $value;
                                    //     else if ($key == 'duracion')
                                    //         $duracion = $value;
                                    //     else if ($key == 'genero')
                                    //         $genero = $value;
                                    // }
                                    if ($id_moviedb != null) {
                                        $url = "https://api.themoviedb.org/3/movie/$id_moviedb?api_key=98fee347b91da83932ea8b9daa0edece&language=es-ES";

                                        $resultado = file_get_contents($url);
                                        if ($resultado != false) {
                                            $json_peli = json_decode($resultado);
                                            $titulo = $json_peli->title;
                                            $poster = $json_peli->poster_path;
                                            $poster = $ruta_imagenes . $poster;
                                        }
                                    }

                                    ?>

                            <img src="<?php echo $poster; ?>" class="img-fluid" alt="poster_pelicula">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $titulo; ?></h5>
                                <p class="card-text">
                                    <span class="badge bg-secondary"><?php echo $clasificacion ?></span>
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
                <h4 id="contacto" class="h4_titulo">Contacto</h4>
            </span>

            <?php
            if (isset($_REQUEST['insert'])) {
                if ($_REQUEST['insert']) {
                    echo '<h4 style="color:green; margin-left:50px;">Gracias por su colaboración</h4>';
                }else{
                    echo '<h4 style="color:red; margin-left:50px;">Ha ocurrido un error</h4>';
                }
            }
            if(isset($_REQUEST['email'])){
                if(!$_REQUEST['email']){
                    echo '<h6 style="color:red; margin-left:50px;">Necesitamos su correo electronico</h6>';
                }
            }
            include('includes/inc_form_contacto.php');

            ?>
        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>