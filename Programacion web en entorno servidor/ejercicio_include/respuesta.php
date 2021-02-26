<!DOCTYPE html>
<html lang="es">

<head><?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respuesta</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <main>
        <h1>Respuesta</h1>
        <?php
        $anno=date('d/m/y');
        echo "<p>$anno</p>";
        $html = "";$css = "";$js = "";$hm = "";$genero = "";$php="";

        foreach ($_POST as $key => $value) {
            $$key = $value;
            echo "<p>$key=$value</p>";
        }
        if ($hm == "m") { 
            $genero="a";
        }else{
            $genero="o";
        }
        echo "<p>Bienvenid" . $genero . " esperamos que disfrutes</p>";
        if ($html == "html" && $css == "css" && $js == "js") {
            echo "<p>Guardado, hemos visto que quieres ser dieñador</p>";
        }
        if($php=="php"){
            echo "<p>Guardado, hemos visto que quieres ser desarrollador</p>";
        }


        ?>
    </main>

    <?php include("includes/inc_pie.php"); ?>
</body>

</html>