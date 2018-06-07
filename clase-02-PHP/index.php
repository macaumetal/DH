<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios 24-04-18</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	

	<h2>Ejercicio 1</h2>
<div>		
	<?php

		$numero1 = 10;
		$numero2 = 20;

		if ($numero1>$numero2) {
			echo "El numero mayor es $numero1";
		} else {
			echo "El numero mayor es $numero2";
		}

		?>
</div>

	<h2>Ejercicio 2</h2>
<div>		
	<?php

		$random = rand(1,5);

		if ($random == 3 || $random == 5) {
			echo $random;
		}
		?>

</div>

	<h2>Ejercicio 3</h2>
<div>		
	<?php

		$random = rand(1,5);

		if ($random != 3 || $random != 5) {
			echo $random;
		}
		?>	
</div>

	<h2>Ejercicio 4</h2>
<div>		
	<?php

		$random = rand(1,100);
		
		echo $random;
		echo "<br>";

		if ($random > 50) {
			echo "El Número es mayor a 50";
		}elseif ($random == 50){
			echo "El Número es 50";
		}else {
			echo "El Número es menor a 50";

		}

		?>	
</div>

	<h2>Ejercicio 5</h2>
<div>		
	<?php

		$nombreDeUsuario = "gus";
		$claveDeUsuario = "1234";

		if ($nombreDeUsuario == "admin" && $claveDeUsuario == "1234") {
			echo "Bienvenido a tu cuenta!";
		}elseif ($nombreDeUsuario != "admin" && $claveDeUsuario != "1234") {
					echo "Lo sentimos, tu usuario y clave son incorrectas";
				}
			elseif ($nombreDeUsuario != "admin") {
				echo "Lo sentimos, tu usuario es incorrecto";
			}elseif ($claveDeUsuario != "1234"){
				echo "Lo sentimos, tu clave es incorrecta";
			} else{
				echo "Andate";
			}
			

		?>	
</div>

	<h2>Ejercicio 6</h2>
<div>	
	<?php
	$edad = 10;
	$casado = false;
	$sexo = "Otro";


	if ($edad >= 18 && !$casado)  {
		echo "Bienvenido!!!";
	}elseif ($sexo == "Otro") {
		echo "Bienvenido!!!";
	}else{
		echo "Aceso Denegado";
	}
	


?>
</div>

	<h2>Ejercicio 7</h2>
<div>	
	<?php
	$cantidadDeAlumnos = 0;
	
	if ($cantidadDeAlumnos) {
		echo "true";
	}else{
		echo "false";
	}
?>	

	<h2>Ejercicio 8</h2>
<div>	
	<?php
	if ($i = 0) {
		echo "true";
	}else{
		echo "false";
	}

?>
</div>

	<h2>Ejercicio 9</h2>
<div>	
	<?php
	$numero = 51;
	$par = "El número es par";
	$impar = "El número es impar";

	$resultado = $numero % 2 == 0 ? $par : $impar;
	
	echo $resultado;


?>
</div>


	<h2>Ejercicio 10</h2>
<div>
		<?php
	
	$nombre = "Gus";


	switch ($nombre) {
		case "Jorge":
			echo "Hola Jorge";
			break;
		case "Gabriel":
			echo "Hola Gabriel";
			break;
			case "Pedro":
			echo "Hola Pedro";
			break;
			case "Raúl":
			echo "Hola Raúl";
			break;
			case "Félix":
			echo "Hola Félix";
			break;
		default:
			echo "No hay a quien saludar";
			break;
	}


?>
</div>


	<h2>Ejercicio 11</h2>
<div>	
	<?php
	
	$colorRemera = "Verde";


	switch ($colorRemera) {
		case "Rojo":
		case "Azul":
		case "Amarillo":
			echo "El color de la remera es un color primario";
			break;
		default:
			echo "La remera es de color desconocido";
			break;
	}
?>
</div>
<h2>Ejercicio random</h2>
<div>		
	<?php

		$random = rand(1,100);
		$n = 
		
		
		

	?>	
</div>
</body>
</html>

