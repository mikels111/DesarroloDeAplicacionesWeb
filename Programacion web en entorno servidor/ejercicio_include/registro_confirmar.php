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
            if (isset($_REQUEST['token'])) {
                // Datos de la BD
                $servername = "localhost";
                $username = "usuario1";
                $passw = "usuario1";
                $dbname = "Mikels";

                // Crear conexion
                $conn = mysqli_connect($servername, $username, $passw, $dbname);

                // Comprobar conexion
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Select del usuario con el token recibido
                $sql = "SELECT id FROM usuarios WHERE token='" . $_REQUEST['token'] . "'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $valor = $result->fetch_assoc();
                    $user_id = $valor["id"];;
                    $sql = "UPDATE usuarios SET estado='A' WHERE id=" . $user_id;
                    $conn->query($sql);
                }
            }
            ?>
        </main>


    </div>
    <?php include("includes/inc_pie.php") ?>
</body>

</html>