<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar peli desde API</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $url = "https://api.themoviedb.org/3/movie/$id?api_key=98fee347b91da83932ea8b9daa0edece&language=en-US";
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
</body>

</html>