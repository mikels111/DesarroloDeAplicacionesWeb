<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/dist/css/bootstrap.css">
    <script src="../css/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/popcorn.ico" type="../image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img style="margin-left:30%;" src="../img/popcorn.svg" alt="" width="30" height="24">
                <h6>Cartelera</h6>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <?php
                    if (isset($_SESSION['loged_in']) or isset($_COOKIE['admin'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../cerrar_sesion.php">Salir</a>
                        </li>
                    <?php
                    }
                    if (isset($_COOKIE['admin'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="lista_peliculas.php">Películas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="peliculas_api.php">API</a>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="../login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="ms-main">
        <div class="ms-content">

            <?php
            include('../includes/conexion.php');

            if (isset($_REQUEST['id'])) {
                $sql = "SELECT * FROM pelicula WHERE id=" . $_REQUEST['id'];
                $result = $conn->query($sql);
                while ($object = $result->fetch_object()) {
                    $titulo_original = $object->titulo;
                    $clasificacion = $object->clasificacion;
                    $duracion = $object->duracion;
                    $genero = $object->genero;
                    $fecha_estreno = $object->fecha_estreno;
                    $estado = $object->estado;
                    $poster = $object->poster;
                    $horarios = $object->horarios;
                }
            ?>
                <form action="update.php" method='post'>
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>">
                    <?php include('../includes/inc_form_peli.php'); ?>
                </form>
            <?php } else { ?>
                <form action="insert.php" method="post">
                    <?php include('../includes/inc_form_peli.php'); ?>
                </form>
            <?php }
            ?>

        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>