<?php

$variable = $_POST; //aca el array tiene la supervariable que indica el metodo de ingreso del formulario

echo "<br>";
echo "<br>";

var_dump($_SERVER);
var_dump($_FILES);

echo "<br>";
echo "<br>";

foreach (getallheaders() as $nombre => $valor) {
    echo "$nombre: $valor\n <br>";
}
echo "<br>";
echo "<br>";



foreach ($variable as $key => $value) { //$variable es el array, $key es la posicion y $value es el valor
	if (is_array($variable)) { //is_array y la variable se mantienen
		echo "Bienvenido " . $value; //imprime el string + el valor de la primera posicion y continua recorriendo el array
		echo "<br>"; //enter
}
}

echo "<br>";
echo "<br>";




?>