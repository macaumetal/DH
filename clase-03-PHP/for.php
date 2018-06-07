<?php

echo "<h2> Ejercicio 1 </h2><br>";

for ($i=0; $i < 100; $i++) { 
	echo $i; 
	echo "<br>";
}

echo "<h2> Ejercicio 2 </h2><br>";

for ($i=0; $i < rand(0,100); $i++) { 
	echo $i; 
	echo "<br>";
}

echo "<h2> Ejercicio 3 </h2><br>";

for ($i=2; $i < 20; $i++) { 
	echo $i++; 
	echo "<br>";
}

echo "<h2> Ejercicio 4 </h2><br>";

$numero = 85;
while ( $numero < 100) {
	echo $numero;
	$numero--;
}