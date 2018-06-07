<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
	<title>Bienvenido!</title>
</head>
<body>

<h1>Bienvenido <?php echo ($_POST ['name'] . ' ' . $_POST['surname']); ?></h1>

<p>Muchas gracias por registrarte en nuestro sitio!</p>
<p>Tu nombre de usuario es </p>
<h2>"<?php echo($_POST ['username']);?>"</h2>
<p>Como miembro de nuestra comunidad, podras:</p>
	<ul>
		<li>Comprar</li>
		<li>Vender</li>
		<li>Intercambiar</li>
		<li>Coleccionar</li>
		<li>Compartir</li>
	</ul>

<p>Recibirás todas las comunicaciones a <u><?php echo($_POST ['email']);?></u></p>

<h3>Que comience la aventura!</h3>
<h5>El equipo de "Tu Empresa"</h5>

</body>
</html>