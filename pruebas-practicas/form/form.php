<?php
include 'functions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario y validacion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="form.php" method="post">
		<fieldset>
			<legend>Formulario</legend>
				Nombre:<br>
				<input type="text" name="nombre"><br>
				<span id='name_errorloc' class='error'><?php echo isset($errores["name"]) ? $errores["name"] : " ";?></span>
				Email:<br>
				<input type="email" name="mail"><br>
				Teléfono:<br>
				<input type="text" name="telefono"><br>
				Contraseña:<br>
				<input type="password" name="contrasena"><br>
				Confirmar Contraseña:<br>
				<input type="password" name="confirmar-contrasena"><br>
				<hr>
				<input type="submit" name="registrarse" value="Registrarse">
		</fieldset>
	</form>

</body>
</html>