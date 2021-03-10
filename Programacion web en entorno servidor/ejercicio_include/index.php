<?php
if ($_SERVER['REQUEST_URI'] != "/mikels/index.php") {
    header("location:" . $_COOKIE['ultima_pagina']);
}
?>
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
            echo "es el acceso " . $_COOKIE['contador'];
            ?>
            <h1>Pagina principal</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque natus deleniti cum vel magnam perspiciatis fuga! Dolore, non molestiae qui pariatur sed nesciunt corporis laudantium facilis ea earum id? Facere. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, nam laudantium eaque hic repellendus cumque ut. Voluptate, architecto repudiandae, minus adipisci commodi id modi doloribus, sit asperiores ullam cumque exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore iusto eligendi enim cupiditate explicabo? Commodi perferendis aut doloremque magnam, veniam et labore iste suscipit corporis reiciendis quaerat atque assumenda quae?</p>
        </main>

        <?php include("includes/inc_pie.php"); ?>
    </div>
</body>

</html>