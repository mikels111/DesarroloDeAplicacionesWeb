<?php
    if ( !$conn = new mysqli("localhost", "root", "", "PON-AQUI-NOMBRE-BASE-DE-DATOS") ){
        $output="Connection failed: " . $conn->connect_error;      
    } else {
        $sql = "SELECT * FROM mensajes";
        if ( $result = $conn->query($sql) ){
            if ($result->num_rows > 0) {
                $output="<table>";
                while($row = $result->fetch_assoc()) {
                    $output.= "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"] . "</td><td>". $row["email"]. "</td></tr>";
                }
                $output.="</table>";
            } else { 
                $output= "0 results"; 
            }
        } else {
                $output="Error en la consulta: ".$conn->error;
        }
        $conn->close();
    }
    echo $output;
?>