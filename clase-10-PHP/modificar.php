<?php
session_start();//la primera vez que entro crea la carpeta de sesion
if (!isset($_SESSION["contador"])){//pregunta si en session esta o no definida la variable "contador"
	$_SESSION["contador"]=0;// si no lo tenes definido, lo seteamos en 0
}
if ($_POST) {//alguien hizo click en un boton?
	if ($_POST["operacion"]== "Restar") {//si hizo clik en restar
		$_SESSION["contador"]--;//modificas la variable -1
	}elseif ($_POST["operacion"]== "Sumar") {//si hace click en sumar
		$_SESSION["contador"]++;//modifica la variable +1
	}elseif ($_POST["operacion"]== "Reiniciar") {//si hace click en Reiniciar
		$_SESSION["contador"] = 0;//pone el valor en 0.
	}
header("location:mostrar.php");//despues de esto "header location" va a mostrar mostrar.php
} 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form class="" action="" method="post">
		<input type="submit" name="operacion" value="Reiniciar">
		<input type="submit" name="operacion" value="Sumar">
		<input type="submit" name="operacion" value="Restar">
	</form>

</body>
</html>