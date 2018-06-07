<?php
function validarDatos($datos){

if ($datos ["name"]=="") {
	$errores["name"]="Por favor ingrese su nombre";
}
if ($datos ["email"]=="") {//si el dato email esta vacio
	$errores["email"]="Por favor ingrese su email";
}elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {//si el dato que pusieron no es como FILTER_VALIDATE_EMAIL (Regex)
	# code...
}
if ($datos ["username"]=="") {
	$errores["username"]="Por favor ingrese su nombre de usuario";
}
if ($datos["password"]=="") {
	$errores["password"] = "Por favor ingrese una contraseña";
}
if ($datos["repassword"]=="") {
	$errores["password"] = "Por favor reingrese su contraseña";
}
elseif ($datos["password"]!==$datos["repasword"]) {
	$errores["repassword"] = "Las contraseñas no coinciden";
}

return $errores;	
}
?>