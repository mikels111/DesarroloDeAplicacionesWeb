<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/dist/css/bootstrap.css">
    <script src="../css/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/popcorn.ico" type="../image/x-icon">
    <title>Insertar peli desde API</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img style="margin-left:30%;" src="../img/popcorn.svg" alt="" width="30" height="24">
                <h6>Cartelera</h6>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <?php
                    if (isset($_SESSION['loged_in']) or isset($_COOKIE['admin'])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../cerrar_sesion.php">Salir</a>
                        </li>
                    <?php
                    }
                    if (isset($_COOKIE['admin'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="lista_peliculas.php">Películas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="peliculas_api.php">API</a>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="../login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="ms-main">
        <div class="ms-content">
            <?php

            if (isset($_COOKIE['admin'])) {
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    $url = "https://api.themoviedb.org/3/movie/$id?api_key=98fee347b91da83932ea8b9daa0edece&language=es-ES";
                    $resultado = file_get_contents($url);
                    $json_peli = json_decode($resultado);
                    // print_r($json_peli);
                    $id_moviedb = $json_peli->id;
                    $titulo = $json_peli->original_title;
                    $generos = $json_peli->genres;
                    $genero = $generos[0]->name;
                    $duracion = $json_peli->runtime;
                    $fecha_estreno = $json_peli->release_date;
                    $poster = $json_peli->poster_path;


                    // $generos = $generos->fetchAll(PDO::FETCH_ASSOC);
                    echo "
            <h1>Id:</h1><h3>$id_moviedb</h3>
            <h1>Titulo:</h1><h3>$titulo</h3> 
            <h1>Generos</h1>
            <ul>
            ";
                    // foreach ($generos as $genero) {
                    //     foreach ($genero as $key => $valor) {
                    //         if ($key == "name")
                    //             echo "<li>$valor</li>";
                    //     }
                    // }
                    echo "</ul>
        genero $genero
        <h1>Poster:</h1><h3>$poster</h3>
        <h1>Release date</h1><h3>$fecha_estreno</h3>
        <h1>Duración</h1><h3>$duracion</h3>
        ";

                    $servername = "localhost";
                    $username = "usuario1";
                    $passw = "usuario1";
                    $dbname = "Mikels";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $passw, $dbname);

                    $sql_select_peli = "SELECT * FROM pelicula WHERE id_moviedb=" . $_REQUEST['id'];
                    $result = $conn->query($sql_select_peli);
                    if (($result->num_rows) > 0) {
                        echo 'Ya está esa peli';
                    } else {
                        $sql_insert = "INSERT INTO pelicula(id_moviedb,titulo,genero,duracion,fecha_estreno,poster) VALUES($id_moviedb,'$titulo','$genero',$duracion,'$fecha_estreno','$poster')";

                        if ($conn->query($sql_insert)) {
                            echo 'Peli insertada';
                        } else {
                            echo 'no insertada';
                        }
                    }
                }
                ?>


                <form action="peliculas_api.php" method="get">
                    <p>Id de pelicula de 'The movie DB'<input type="number" name="id" id="id"></p>
                    <input type="submit" value="Insertar">
                </form>



            <?php } else {
                echo '<h3>Página no encontrada</h3>';
            } ?>
        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>