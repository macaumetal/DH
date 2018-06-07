<?php

$archivo = "texto2.txt";

if (file_exists($archivo)) {
	echo "El archivo <strong>$archivo</strong> existe";
}else{
	echo "El archivo <strong>$archivo</strong> NO existe";
}

$gestor = fopen("texto2.txt", "w");
file_put_contents("texto2.txt", "Hola nuevamente mundo!");
fclose($gestor);

echo "<br>";
echo "<br>";

$gestor = fopen("texto2.txt", "w");
file_put_contents("texto2.txt", "Este texto pisa el anterior?");
fclose($gestor);

echo "<br>";
echo "<br>";



$archivo = "texto2.txt";
$actual = "YA NO!";
file_put_contents($archivo, $actual, FILE_APPEND|LOCK_EX);


echo "<br>";
echo "<br>";

$archivo = file_get_contents("texto2.txt");

echo $archivo;



?>
