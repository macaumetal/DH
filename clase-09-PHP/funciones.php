<?php


function validarRegistracion($datosDePost) {/*esta funcion deberia devolverme un array de errores*/
   $arrayDeErrores = [];
if ($datosDePost["nombre"]=="") {
   $arrayDeErrores["nombre"]="Por favor ingrese su nombre";
  }
if ($datosDePost["apellido"]=="") {
   $arrayDeErrores["apellido"]="Por favor ingrese su apellido";
  }
if ($datosDePost["username"]=="") {
   $arrayDeErrores["username"]="Por favor ingrese su usuario";
  }
if ($datosDePost["email"]=="") {
    $arrayDeErrores["email"]="Por favor ingrese su email";
  }elseif (!filter_var($datosDePost["email"],FILTER_VALIDATE_EMAIL)) {
    $arrayDeErrores["email"]="Por favor ingrese un email valido";
  }

if ($datosDePost["email"]=="") {
    $arrayDeErrores["email"]="Por favor ingrese su email";
}elseif ($datosDePost["email"]!==$datosDePost["email_confirm"]) {
   $arrayDeErrores["email_confirm"]="El mail ingresado no coincide";
  }
if ($datosDePost["contrasena"]=="") {
    $arrayDeErrores["contrasena"]= "Por favor ingrese una contraseña";
  }
if ($datosDePost ["contrasena_confirm"]=="") {
    $arrayDeErrores["contrasena_confirm"]= "Por favor reingrese su contraseña";
  }elseif ($datosDePost["contrasena"]!==$datosDePost["contrasena_confirm"]) {
    $arrayDeErrores["contrasena_confirm"]="Las contraseñas no coinciden";
}
	return $arrayDeErrores;
}

function validarLogin ($datosDePost){/*esta funcion deberia devolverme un array de errores*/
  $erroresDeLogin = [];
  if ($datosDePost["username"]=="") {
   $erroresDeLogin["username"]="Por favor ingrese su usuario";
  }
  if ($datosDePost["contrasena"]=="") {
    $erroresDeLogin["contrasena"]= "Por favor ingrese una contraseña";
  }
}
function loginExitoso(/*????*/){
  /*esta funcion va a recibir los parametros y iniciar una session*/
}
function logout(){

}

?>