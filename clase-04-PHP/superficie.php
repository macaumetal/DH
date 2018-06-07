<?php

//EJERCICIO 1
echo "<h1> Ejercicio 2.a</h1><br>";
function triangulo($base, $altura) {

return $base*($altura/2);


}

echo "La superficie del triangulo es: " . triangulo (6, 4);

//EJERCICIO 2

echo "<h1> Ejercicio 2.b</h1><br>";

function rectangulo($base, $altura) {

return $base*$altura;


}

echo "La superficie del rectangulo es: " . rectangulo (8, 4);

//EJERCICIO 3

echo "<h1> Ejercicio 2.c</h1><br>";

function cuadrado($base, $altura) {

return $base*$altura;


}

echo "La superficie del cuadrado es: " . cuadrado (8, 8);

//EJERCICIO 4

echo "<h1> Ejercicio 2.d</h1><br>";

function circulo($radio) {

return pi()*($radio*$radio);


}

echo "La superficie del circulo es: " . circulo (8);

//EJERCICIO TODOJUNTO

echo "<h1> Ejercicio Todo Junto</h1><br>";

	function radioMayor ($radio1, $radio2, $radio3) {
		if ($radio1>$radio2 && $radio1 >$radio3) { //comparo que el 1 sea mayor al 2 y el 3
			return $num1; //le pido que me deuelva el mayor si ese mayor es 1

		} 	elseif ($radio2>$radio3) { //si entro aca, es porque el 1 no es mayor, asi que le pregunto si el 2 es mayor a 3
				return $radio2; // que me devuelva ese 2

			} 	else { //si entra aca por descarte el mayor es el 3
					return $radio3; // que me devuelva el 3
				}
	}
	echo radioMayor(8, 12, 25); //llamo la funcion