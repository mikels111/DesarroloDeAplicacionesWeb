<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    include('includes/conexion.php');
    if(isset($_REQUEST['id'])){
        $sql = 'SELECT * FROM usuarios WHERE id='.$_REQUEST['id'];
        $result = $db->query($sql);
        $result_fetch = $result->fetch(PDO::FETCH_ASSOC);
        print_r($result_fetch);
        include('includes/formulario.php');
    }else{
        echo "<h2>Pagina no encontrada</h2>";
        include('includes/formulario.php');
    }
    ?>
    
</body>

</html>