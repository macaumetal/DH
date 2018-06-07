<?php

$dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
$user = "root";
$pwd = "";

$db = new PDO($dsn, $user, $pwd);

$statement = $db->query("SELECT * FROM movies");
$resultado = $statement->fetchAll(PDO::FETCH_ASSOC); // es un metodo para que nos traiga todo en modo de array


foreach ($resultado as $key => $value) {
	foreach ($value as $clave => $valor) {

		echo $value[$clave];
		echo "<br>";
	}
	
	var_dump($resultado);
}

?>