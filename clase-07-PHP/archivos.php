<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$archivo = "texto.txt";

if (file_exists($archivo)) {
	echo "El archivo <strong>$archivo</strong> existe";
}else{
	echo "El archivo <strong>$archivo</strong> NO existe";
}

$gestor = fopen("texto.txt", "w");

file_put_contents("texto.txt", str_repeat("Hola mundo! testing" . "\n", 100));

fclose($gestor);

$archivo = "texto.txt";
$gestor = fopen($archivo, "r");
$tamanio = filesize($archivo);
$contenido = fread($gestor, $tamanio);
fclose($gestor);

echo "<br>";
echo "<br>";

$archivo = file_get_contents("texto.txt");

echo $archivo;

echo "<br>";
echo "<br>";


$gestor = fopen("texto.txt", "r");

if ($gestor) {
	while (($linea = fgets($gestor))!== false) {
		echo $linea;
	}
}
fclose($gestor);


echo "<br>";
echo "<br>";


$archivo2 = file_get_contents("archivo.json");
$decode = json_decode($archivo2, true);
$decode = $decode["categorias"];
var_dump($decode);

foreach ($decode as $key => $value) {
	foreach ($value as $key2 => $value2) {
		foreach ($value2 as $key3 => $value3) {
			var_dump($value3);
		}
	}
}

echo "<br>";
echo "<br>";



?>

<form><input type="checkbox" name="Deportes" value=<?php echo $value3;?>></form>

</body>
</html>