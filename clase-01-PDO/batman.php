<?php

$dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
$user = "root";
$pwd = "";

$db = new PDO($dsn, $user, $pwd);

$db->query("SELECT ':D' FROM DUAL");

var_dump($db);
?>