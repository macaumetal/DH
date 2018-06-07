<?php

$dsn = 'mysql:host=localhost;dbname=movies_db;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';

$db = new PDO($dsn, $db_user, $db_pass);//creo el nuevo objeto

$idSeries = 5; //creo la variable que va a ser la posicion que voy a querer

$sql = 'SELECT * FROM series 
		WHERE id='.$idSeries;//creo una variable donde va a ir la seleccion del id que corresponda a la variable de la base de 
							 //series.

$query = $db->prepare($sql);// preparo la onslta(query) 
$query->execute(); // ejecuto la query

$result = $query->fetch(PDO::FETCH_ASSOC);//pido que me devuelva una sola (determinada por la variable $idSeries) como array asociativo


var_dump($result);
?>
