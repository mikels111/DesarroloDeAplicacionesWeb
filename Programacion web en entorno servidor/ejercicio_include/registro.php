<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>

<body>

    <?php 
		include("includes/inc_cabecera.php"); 
		
	?>
    <div id="main_container">
        <main>
			<?php
				
				$nombre_form = $email_form = $apellido_form = $contrasena_form = '';
				$verformulario = true;
				$mensaje = '';
				
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$nombre = recogerVar($_POST['nombre']);
					$apellido = recogerVar($_POST['apellidos']);
					$email = recogerVar($_POST['correo'], true);
					$contrasena = recogerVar($_POST['password']);
					
					if ($nombre == false || $email == false  || $apellido == false || $contrasena == false) {
						$nombre_form = $_POST['nombre'];
						$email_form = $_POST['correo'];
						$apellido_form = $_POST['apellidos'];
						$contrasena_form = $_POST['password'];
						$verformulario = true;
						$mensaje = '<p style="color:red;">Algun dato es erroneo</p>';
					}else{
						$verformulario = false;
					}
				} 
				
				if ($verformulario) {
			?>
			<form name="registro" method="post">
				<p>Nombre: <input type="text" name="nombre" id="nombre" value = "<?php echo $nombre_form?>" maxlength="30"/></p>
				<p>Apellidos: <input type="text" name="apellidos" id="apellidos" value = "<?php echo $apellido_form?>" maxlength="30"/></p>
				<p>Email: <input type="text" name="correo" id="correo" value = "<?php echo $email_form?>"/></p>
				<p>Contraseña: <input type="password" name="password" id="password" value = "<?php echo $contrasena_form?>" maxlength="9" /></p>
				<?php echo $mensaje?>
				<input type="submit" value="Registro" />
			</form>
			<?php
				}else{
                    
					/*if(registro($_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['password'])){
						$mensaje = '<p>Registro completado</p>';
					}else{
						$mensaje = '<p>Error, registro no completado</p>';
					}*/
					registro($_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['password']);
					//hacer SELECT para mirar si está el registro
					
					// si da true
						//se informa de que ya está registrado
					// si da false
						//se hace el INSERT
						
					$query = '';
					echo $mensaje;
				}
			?>
        </main>
    </div>
</body>

</html>