<?php
include_once("functions.php");

if ($_POST) {
	$errores = validarLogin($_POST); {
		if (empty($errores)) {
			validarUsuario($_POST);
		}

	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form class="method" action="" method="post">
		Usuario:
		<input type="text" name="username">
		<br>
		<br>
		Password:
		<input type="text" name="password">
		<br>
		<br>
		<input type='submit' name='Submit' value='Enviar' />
		
	</form>
</body>
</html>
