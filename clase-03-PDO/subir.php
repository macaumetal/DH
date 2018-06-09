<?php
if ($_POST){
	function subirArchivo () {
var_dump($_FILES ['fotoPerfil']['error']);
		if ($_FILES ['fotoPerfil']['error'] === UPLOAD_ERR_OK){
			$archivoSubido = $_FILES ['fotoPerfil']['name'];
			$archivoTemp = $_FILES['fotoPerfil']['tmp_name'];
			$extensionDeArchivo = pathinfo($archivoSubido, PATHINFO_EXTENSION);

			$laFotodePerfil = dirname(__FILE__);
			$laFotodePerfil = $laFotodePerfil . '/subidos/';
			$laFotodePerfil = $laFotodePerfil . uniqid() . "." . $extensionDeArchivo;

			/*var_dump($laFotodePerfil);*/
			move_uploaded_file($archivoTemp, $laFotodePerfil);

			
      echo $_FILES["fotoPerfil"]["name"];
		}
	}
	subirArchivo();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value=100000000>
	<input type="file" name="fotoPerfil"><br>
	<input type="submit" name="Subir">
	
<img src="<?php echo $_FILES["fotoPerfil"]["name"] ?>">

</form>



</body>
</html>