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
			if (isset($_REQUEST['registro'])) {
				if ($_REQUEST['registro'] == false) {
					echo "<p style='color:red;'>El nombre o el correo están en uso</p>";
				}
			}
			$nombre_form = $email_form = $apellido_form = $contrasena_form = $usuario_form = $fecha_nacimiento_form = $telefono_form = '';
			$verformulario = true;
			$mensaje = '';
			

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$nombre = filter($_POST['nombre']);// filtrar
				$apellido = filter($_POST['apellidos']); // filtrar
				$email = filter_var(filter($_POST['correo']), FILTER_VALIDATE_EMAIL); // filtrar(trim,especial chars...) y filter_email
				$contrasena = preg_match($password_pattern, filter($_POST['password']));// filtrar(trim,especial chars...) y filtrar contraseña
				$usuario = preg_match($user_pattern, filter($_POST['user']));// filtrar(trim, especial chars...) y filtrar nombre
				$fecha_nacimiento = preg_match($fecha_pattern, filter($_POST['fecha_nacimiento']));//filtrar(trim,especial chars...) y filtrar fecha
				$telefono = preg_match($number_pattern, filter($_POST['telefono']));//filtrar(trim,especial chars...) y filtrar telefono
				
				if ($nombre == false || $email == false  || $apellido == false || $contrasena == false || $usuario== false || $fecha_nacimiento== false || $telefono== false) {
					$nombre_form = $_POST['nombre'];
					$email_form = $_POST['correo'];
					$apellido_form = $_POST['apellidos'];
					$contrasena_form = $_POST['password'];
					$verformulario = true;
					$mensaje = '<p style="color:red;">Algun dato es erroneo</p>';
				} else {
					$verformulario = false;
				}
			}

			if ($verformulario) {
				?>
				<form name="registro" method="post">
					<p>Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $nombre_form ?>" maxlength="30" /></p>
					<p>
						<!--variable de que el campo está mal introducido-->
					</p>
					<p>Apellidos: <input type="text" name="apellidos" id="apellidos" value="<?php echo $apellido_form ?>" maxlength="30" /></p>
					<p>Nombre de usuario: <input type="text" name="user" id="usuario" value="<?php echo $usuario_form ?>"></p>
					<p>Email: <input type="text" name="correo" id="correo" value="<?php echo $email_form ?>" /></p>
					<p>Contraseña: <input type="password" name="password" id="password" value="<?php echo $contrasena_form ?>" maxlength="9" /></p>
					<p>Fecha de nacimiento <input type="date" name="fecha_nacimiento" id="nacimiento" value="<?php echo $fecha_nacimiento_form ?>"></p>
					<p>Teléfono <input type="tel" name="telefono" id="telefono" value="<?php echo $telefono_form ?>"></p>
					<?php echo $mensaje ?>
					<input type="submit" value="Registro" />
				</form>
			<?php
			} else {
				//hacer SELECT para mirar si está el registro
				// $registrar=registro($_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['password']);
				registro2($_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['password'], $_POST['user'],$_POST['fecha_nacimiento'],$_POST['telefono']);
				// if($registrar){
				// 	echo "<p style='color:white; background:lightgreen;'>Registrado</p>";
				// }else{
				// 	echo ", intentalo de nuevo";
				// }

				// echo $mensaje;
			}
			?>
		</main>
	</div>
</body>

</html>