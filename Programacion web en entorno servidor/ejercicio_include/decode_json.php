<?php
// echo $ip = $_SERVER['REMOTE_ADDR'];
$ip = $_GET["id"];
$url = "https://api.ipgeolocationapi.com/geolocate/$ip";
// $url ="https://api.themoviedb.org/3/movie/550?api_key=98fee347b91da83932ea8b9daa0edece";
$resultado = file_get_contents($url);
echo '<h3>JSON</H3>';
echo $resultado;
$iplocation = json_decode($resultado);
echo '<h3>JSON decode</H3>';
print_r($iplocation);

print_r("<br><br><h3>Json</h3>");
$unofficial = $iplocation->unofficial_names;
$pais = mensajePais($iplocation->alpha2);
// echo de los datos
echo "
Continente: $iplocation->continent <br>
País: $pais<br>
Unnoficial names:<br>";
foreach ($unofficial as $key => $value) {
    echo "&emsp;$key->$value<br>";
}

$coordenadas = $iplocation->geo;
$latitud = $coordenadas->latitude;
$longitud = $coordenadas->longitude;
echo "Coordenadas:<br>
&emsp;Latitud: $latitud<br>
&emsp;Longitud: $longitud";

function mensajePais($pais)
{
    switch ($pais) {
        case 'ES':
            return "España, Hola Mundo";
            break;
        case 'US':
            return "United States, Hello World";
            break;
        default:
            return "Otro país";
            break;
    }
}
