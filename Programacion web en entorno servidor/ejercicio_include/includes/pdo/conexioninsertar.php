<?php

try {
    include("conexion.php"); //  abrir conexion 
    // creo valores paar insertar en tabla
    $ip = $_SERVER['REMOTE_ADDR'];
    $valoralazar = date("s");
    $nombre = 'Usuario ' . $valoralazar;
    $nombre ='<script>alert("unvirus")</script>';
    $fecha = date("Y-m-d");
    $horaini = date("H:i");
    $nombre= '<?php header("location:miweb.com");?>';
    $horafin ='';
    $idusuario = $valoralazar;
    /* creo estructura para pasae a la  query preparada
    $data = [
        'ip' => $ip,
        //'nombre' => $nombre,
        'nombre' => '<script>alert("unvirus")</script>',
        'fecha' => $fecha,
        'horaini' => $horaini,
        'horafin' => $horafin,
        'idusuario' => $idusuario,
    ];
    */


    // preparo la query
    echo $query = "insert into conexion (ip,nombre,fecha,horaini,horafin,idusuario) values 
    (:ip,:nombre,:fecha,:horaini,:horafin,:idusuario)";
    $resultado = $mbd->prepare($query) ;
    // ejecuto la preparacion de la query
    $resultado ->bindValue(":ip",$ip);
    $resultado ->bindValue(":nombre",$nombre);
    $resultado ->bindValue(":fecha",$fecha);
    $resultado ->bindValue(":horaini",$horaini);
    $resultado ->bindValue(":horafin",$horafin);
    $resultado ->bindValue(":idusuario",$idusuario);
    $Exec = $resultado -> execute();
    $mbd = null; // cerrar conexion
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}





   //if ($Exec) { echo 'Ok';} else {echo 'error'; }
    
    
    
    
    
    /* $resultado ->execute($data);  
    if ($resultado) { echo 'Ok';}else {echo 'error';}  */
   
   
   

?>