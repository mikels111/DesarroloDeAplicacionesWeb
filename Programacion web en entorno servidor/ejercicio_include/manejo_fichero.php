<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Include</title>
</head>

<body>

    <?php include("includes/inc_cabecera.php"); ?>
    <div id="main_container">
        <main>
            <?php
            echo $_SERVER["DOCUMENT_ROOT"];
            $ruta = $_SERVER["DOCUMENT_ROOT"] . '/mikels/ejercicio_include/mifichero.txt';
            $fichero_filas = file($ruta);
            for ($i = 0; $i < count($fichero_filas); $i++) {
                echo "<p> Linea : $i | " . htmlspecialchars($fichero_filas[$i]) . "</p>";
            }
            $fichero = fopen($ruta,'a+');
            fwrite($fichero,'Alberto');
            fclose($fichero);
            ?>
        </main>


    </div>
    <?php 
        // include("includes/inc_pie.php") 
    
    ?>
</body>

</html>