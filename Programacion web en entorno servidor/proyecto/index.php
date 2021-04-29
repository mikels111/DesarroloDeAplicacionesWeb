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
                            else if ($key == 'poster')
                                $poster = $ruta_imagenes . $value;
                            else if ($key == 'titulo')
                                $titulo = $value;
                            else if ($key == 'clasificacion')
                                $clasificación = $value;
                            else if ($key == 'duracion')
                                $duracion = $value;
                            else if ($key == 'genero')
                                $genero = $value;
                        }
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
                ?>
            </div>
            <!-- fin flexbox -->

            <span class="badge bg-primary titulo">
                <h4>Noticias</h4>
            </span>
        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>