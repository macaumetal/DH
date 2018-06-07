<?php

$dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
$user = "root";
$pwd = "";

try{
	$db = new PDO($dsn, $user, $pwd);
	$statement = $db->query ("SELECT 'id', 'title'  FROM movies_db");
	$resultado = $statement->fetchAll(PDO::FETCH_NUM);
	
}
catch(PDOException $error){
	echo $error->getMessage();
}

?>