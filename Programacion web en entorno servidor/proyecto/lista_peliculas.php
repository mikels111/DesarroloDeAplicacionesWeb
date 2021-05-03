<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('includes/inc_head.php') ?>
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    include('includes/inc_nav.php');
    include('includes/conexion.php');
    ?>
    <div class="ms-main">
        <div class="ms-content">

            <div class="ms-tabla-peliculas">
                <h2 id="tabla_peli">Listado de películas</h2>
                <button style="padding:0 3px 0 3px;margin:20px 0 20px 0" type="button" class="btn btn-primary"><a href="index.php">Nueva película</a> </button>
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
                                            <button type="button" class="btn btn-success" onclick="edit_peli(<?php echo $object->id ?>)">&#10000;</button>
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

        function edit_peli(id) {
            $.ajax({
                method: "POST",
                url: "edit_peli.php",
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