<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/dist/css/bootstrap.css">
    <script src="../css/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/popcorn.ico" type="../image/x-icon">
    <script src="jquery-3.6.0.min.js"></script>
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
    <?php
    include('../includes/conexion.php');
    ?>
    <div class="ms-main">
        <div class="ms-content">
            <?php
            if (isset($_REQUEST['update'])) {
                if ($_REQUEST['update'] == true) {
                    echo "<h5 style='color:green;margin-left:40px;'>Pelicula actualizada</h5>";
                }else{
                    echo "<h5 style='color:red;margin-left:40px;'>Pelicula no actualizada</h5>";
                }
            }
            if (isset($_REQUEST['insert'])) {
                if ($_REQUEST['insert'] == true) {
                    echo "<h5 style='color:green;margin-left:40px;'>Pelicula insertada</h5>";
                }else{
                    echo "<h5 style='color:red;margin-left:40px;'>Pelicula no insertada</h5>";
                }
            }
            if (isset($_COOKIE['admin'])) {
                ?>
                <div class="ms-tabla-peliculas">
                    <h2 id="tabla_peli">Listado de películas</h2>
                    <button style="padding:0 3px 0 3px;margin:20px 0 20px 0" type="button" class="btn btn-primary"><a href="edit_peli.php">Nueva película</a> </button>
                    <?php
                        if (isset($_COOKIE['admin'])) { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Título</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Clasificación</th>
                                    <th scope="col">Duración</th>
                                    <th scope="col">Fecha estreno</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $sql = 'SELECT * FROM pelicula';
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // include('includes/inc_tabla_peliculas.php');
                                            while ($object = $result->fetch_object()) { ?>

                                        <tr>
                                            <th scope="row"><?php echo $object->titulo ?></th>
                                            <td><?php echo $object->genero ?></td>
                                            <td><?php echo $object->clasificacion ?></td>
                                            <td><?php echo $object->duracion ?></td>
                                            <td><?php echo $object->fecha_estreno ?></td>
                                            <!-- Estado -->
                                            <td>
                                                <?php

                                                                if ($object->estado == 'A') {
                                                                    echo '<button type="button" class="btn btn-success" onclick="estado(' . $object->id . ')">Activa</button>';
                                                                } else {
                                                                    echo '<button type="button" class="btn btn-danger" onclick="estado(' . $object->id . ')">No activa</button>';
                                                                }
                                                                ?>
                                                <!-- <button type="button" class="btn btn-success" onclick="estado(32);">Activa</button> -->
                                            </td>
                                            <!-- Opciones -->

                                            <td>
                                                <button type="button" class="btn btn-success"><a href="edit_peli.php?id=<?php echo $object->id ?>">&#10000;</a> </button>
                                                <button type="button" class="btn btn-danger" onclick="delete_peli(<?php echo $object->id ?>)">⌫</button>
                                            </td>
                                        </tr>
                            <?php }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                </div>

            <?php } ?>
        </div>

    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>

    <script>
        // function estado(params) {
        //     $('button').click(function() {
        //         alert("ajaxdfgsdf");
        //     });
        // }
        function estado(id) {
            $.ajax({
                method: "POST",
                url: "update_estado.php",
                data: {
                    id: id
                }
            }).done(function(msg) {
                window.location = "lista_peliculas.php";
            });
        }

        function delete_peli(id) {
            $.ajax({
                method: "POST",
                url: "delete_peli.php",
                data: {
                    id: id
                }
            }).done(function(msg) {
                window.location = "lista_peliculas.php";
            });
        }
    </script>
</body>

</html>