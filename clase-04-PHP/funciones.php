	<?php
	$numeroMagico = 99;
	
	echo "<h1> Ejercicio 1.a</h1>";
	function mayor ($num1, $num2, $num3) {
		if ($num1>$num2 && $num1 >$num3) { //comparo que el 1 sea mayor al 2 y el 3
			return $num1; //le pido que me deuelva el mayor si ese mayor es 1

		} 	elseif ($num2>$num3) { //si entro aca, es porque el 1 no es mayor, asi que le pregunto si el 2 es mayor a 3
				return $num2; // que me devuelva ese 2

			} 	else { //si entra aca por descarte el mayor es el 3
					return $num3; // que me devuelva el 3
				}
	}
	echo mayor(2, 2, 8); //llamo la funcion


	echo "<h1> Ejercicio 1.b</h1>";
	function tabla($base, $limite){ //creo la funcion con los parametros

		$array = range ($base, $limite); //al array le asigno el rango en el que se tiene que crear

			return $array; // pido que me lo devuelva
	}

	 var_dump (tabla (1, 10)); //con var_dump lo veo porque es la unica forma de ver arays

// echo "<h1> Ejercicio 1.b.1/h1>"; //intentar con el FOR
// 	function tabla($base, $limite){ //creo la funcion con los parametros

// 		$array = range ($base, $limite); //al array le asigno el rango en el que se tiene que crear

// 			return $array; // pido que me lo devuelva
// 	}

// 	 var_dump (tabla (1, 10)); //con var_dump lo veo porque es la unica forma de ver arays

echo "<h1> Ejercicio 1.c</h1>";

function tabla1($base, $limite = null){ //creo la funcion con los parametros y le doy valor null al limite si no hay nada

		global $numeroMagico;

			if ($limite === null) {
				$limite = $numeroMagico;
			}

		$array = range ($base, $limite); //al array le asigno el rango en el que se tiene que crear

			return $array; // pido que me lo devuelva
	}

	 var_dump (tabla1 (1)); //con var_dump lo veo porque es la unica forma de ver arays

