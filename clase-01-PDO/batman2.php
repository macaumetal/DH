<?php

$dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
$user = "root";
$pwd = "";

$db = new PDO($dsn, $user, $pwd);

$statement = $db->query("SELECT ':D' FROM DUAL");
$resultado = $statement->fetchAll(PDO::FETCH_ASSOC); // es un metodo para que nos traiga todo en modo de
var_dump($resultado);

?>