<?php
$id=$_REQUEST['id'];
$url = "https://api.themoviedb.org/3/movie/$id?api_key=98fee347b91da83932ea8b9daa0edece&language=en-US";
$resultado = file_get_contents($url);

$json_peli = json_decode($resultado);
print_r($json_peli);

$generos = $json_peli->genres;
$titulo_original= $json_peli->original_title;
$overview = $json_peli->overview;
$poster= $json_peli->poster_path;
$release_date = $json_peli->release_date;
$duracion = $json_peli->runtime;
// $generos = $generos->fetchAll(PDO::FETCH_ASSOC);
echo "
<h1>Titulo:</h1><h3>$titulo_original</h3> 
<h1>Generos</h1>
<ul>
";
foreach ($generos as $genero) {
    foreach ($genero as $key => $valor) {
        if($key=="name")
            echo "<li>$valor</li>";
    }
}
echo "</ul>
<h1>Sinopsis:</h1><h3>$overview</h3>
<h1>Poster:</h1><h3>$poster</h3>
<h1>Release date</h1><h3>$release_date</h3>
<h1>Duración</h1><h3>$duracion</h3>
";
