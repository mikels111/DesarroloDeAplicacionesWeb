<?php
include('includes/conexion.php');
// nombre=mikel&login=mikelseara11&apellidos=Caballero+Valor&email=mikelseara11%40gmail.com&password=12324O%40sadf&tipo=&fecha_nacimiento=2021-04-13&num_tlf=943300394&rol=&fecha_alta=2021-04-21&estado=A&token=81962219e4d45f4529af&fecha_token=


// mirar si lo introducido está en la bd
$sql="SELECT * FROM usuarios WHERE ";
$result= $db->query($sql);
    // no 
        // hacer update y redireccionar insert_update informando
    // si
        // redireccionar a insert_update.php informando