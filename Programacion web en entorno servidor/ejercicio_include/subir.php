<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivo</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <div id="main_container">
        <main>
            <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // echo "<br>" . $_SERVER['DOCUMENT_ROOT'] . "/ficheros";
                // echo "<br>" . $_FILES['fichero_usuario.txt']['tmp_name'];

                // ( [fichero_usuario] => Array ( [name] => origami-1.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\php29DE.tmp [error] => 0 [size] => 11683 ) )

                $dir_subida = $_SERVER['DOCUMENT_ROOT'] . "/ficheros/";
                $partes = explode(".", $_FILES['fichero_usuario']['name']);
                $fichero_subido = $dir_subida . $partes[0] . "_" . $_SERVER['REQUEST_TIME'] . "." . $partes[1];

                //pdf, doc, docx, odt, odf, png, jpg.
                $tipo_correcto = $_FILES['fichero_usuario']['type'];

                if ($tipo_correcto == "application/pdf" || $tipo_correcto == "application/msword" || $tipo_correcto == "application/docx" || $tipo_correcto == "application/vnd.oasis.opendocument.text" || $tipo_correcto == "image/png"  || $tipo_correcto == "image/jpeg") {
                    if ($_FILES['fichero_usuario']['size'] <= "20000") {
                        if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
                            echo "<br>Subido";
                        } else {
                            echo "<br>Ha habido algun problema en la subida";
                        }
                    } else {
                        echo "<br>archivo demasiado pesado (20 mb maximo), tamaño: " . $_FILES['fichero_usuario']['size'];
                    }
                } else {
                    echo "<br>" . $tipo_correcto . " tipo de archivo no permitido";
                }
            }
            ?>

            <!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
            <form enctype="multipart/form-data" action="" method="POST">
                <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
                <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
                <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
                Enviar este fichero: <input name="fichero_usuario" type="file" />
                <input type="submit" value="Enviar fichero" />
            </form>

        </main>


        
    </div>
</body>

</html>