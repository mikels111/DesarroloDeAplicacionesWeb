<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <main>
        <h1>Contacto</h1>
        <form action="">
            <label for="email">Correo electronico</label>
            <input type="email" id="email"><br>
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="text" cols="30" rows="10"></textarea>
        </form>
    </main>

    <?php include("includes/inc_pie.php"); ?>
</body>

</html>