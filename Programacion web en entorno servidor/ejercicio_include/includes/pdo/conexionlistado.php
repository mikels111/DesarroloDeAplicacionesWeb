<?php

try {
    include("conexion.php");
    $query = 'SELECT * from usuarios';
    echo '<table style="border:solid;border-width: thin;">';
    $result = $mbd->query($query);
    $valores = $result->fetch(PDO::FETCH_ASSOC);
    echo $valores["id"];

    foreach($mbd->query($query) as $fila) {
    echo $fila[0];
       echo '<tr style="border:solid;border-width: thin;">';
       ///* bloque foreach 
       foreach ($fila as $key => $valor)
       {
            echo "<td style='border:solid;border-width: thin;'>$key = $valor</td>";
       }
       //fin bloque foreach */

       /*  vista en tabla
       echo '<td>' . $fila['id'] . '</td><td>' .  $fila['nombre'] . '</td><td>' .$fila['ip'] . '</td><td>' .$fila['fecha'] . '</td><td>' . $fila['horaini'] . '</td><td>' . $fila['idusuario'] . '</td>';

       echo '</tr>';
       */
      //print_r ($fila);
    }

    $mbd = null; // cerrar conexion
    echo '<table>';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>