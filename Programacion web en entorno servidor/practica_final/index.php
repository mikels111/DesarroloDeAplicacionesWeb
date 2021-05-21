<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        h2{
            width: 50%;
            margin:20px auto;
        }
        .main-content {
            background-color: #ccc;
            width: 50%;
            margin: 50px auto;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0px 0px 40px 1px #ccc;
        }
    </style>
    link
</head>

<body>
    <h2>Añadir producto</h2>
    <div class="main-content">
        <?php
        if (isset($_REQUEST['add'])) {

            if ($_REQUEST['add']) {
                echo "<p style='color:blue;'>Producto añadido</p>";
            } else {
                echo "<p style='color:red;'>Producto no añadido</p>";
            }
        }
        if (isset($_REQUEST['error'])) {
            echo "<p style='color:red;'>Error</p>";
        }
        ?>
        <!-- nombre,suministrador,precio, comentario y link -->
        <form class="ms-form-contacto" action="add_producto.php" method="post">
            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <!-- suministrador -->
            <div class="mb-3">
                <label for="suministrador" class="form-label">Suministrador</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="suministrador">
            </div>
            <!-- precio -->
            <div class="mb-3">
                <label for="precio" class="form-label">precio</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="precio">
            </div>

            <!-- descripcion -->
            <div class="form-floating">
                <textarea class="form-control" placeholder="" id="floatingTextarea" style="height:100px;" name="descripcion"></textarea>
                <label for="floatingTextarea">Descripcion</label>
            </div>

            <!-- link -->
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top:50px;">Enviar</button>
        </form>
    </div>

</body>

</html>