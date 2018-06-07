<?php
function validarRegister($datos){
  $arrayDeErrores = [];
  if ($datos["name"]=="") {
   $arrayDeErrores["name"]="Por favor ingrese su nombre";
  }
  if ($datos["email"]=="") {
    $arrayDeErrores["email"]="Por favor ingrese su email";
  }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    $arrayDeErrores["email"]="Por favor ingrese un email valido";
  }if ($datos["username"]=="") {
   $arrayDeErrores["username"]="Por favor ingrese su usuario";
  }
  if ($datos["password"]=="") {
    $arrayDeErrores["password"]= "Por favor ingrese una contraseña";
  }
  if ($datos ["cpassword"]=="") {
    $arrayDeErrores["cpassword"]= "Por favor reingrese su contraseña";
  }elseif ($datos["password"]!==$datos["cpassword"]) {
    $arrayDeErrores["cpassword"]="Las contraseñas no coinciden";
  }

  return $arrayDeErrores;

}


function yaExiste($datos){
  $errorExiste=[];
    $json= file_get_contents("usuarios.json");
    $array= json_decode($json,true);
    $array = $array["usuarios"];

    for ($i=0; $i < count($array); $i++) {
      $user = json_decode($array[$i],true);
      if($datos["username"]==$user["usuario"]){
      $errorExiste["usuario"]="Ya existe un usuario con ese nombre por favor elija otro";
      }
      if ($datos["email"]==$user["mail"]) {
      $errorExiste["email"]="Ya existe un usuario con ese email si no recuerda sus datos puede resetear su contraseña";
      }

    }
    return $errorExiste;

}
function crearUsuario($datos){
  return [
    "nombre" => $datos["name"],
    "mail" => $datos["email"],
    "usuario" => $datos ["username"],
    "password" => password_hash($datos["password"],PASSWORD_DEFAULT),
  ];

}
function validarLogin($datos){
  $errores = [];
  if ($datos["username"]=="") {
    $errores["username"]= "Por Favor ingrese su usuario" ;
  }
  if($datos["password"]==""){
    $errores["password"]= "Por Favor ingrese su contraseña";
  }
  return $errores;


}

function guardarUsuario($usuario){
  $user= json_encode($usuario);
  $json= file_get_contents("usuarios.json");
  $array= json_decode($json,true);
  $array["usuarios"][]= $user;
  $array= json_encode($array);
  file_put_contents("usuarios.json",$array);
}

function validarUsuario($datos){

  $json= file_get_contents("usuarios.json");
  $array= json_decode($json,true);
  $array = $array["usuarios"];
  for ($i=0; $i < count($array); $i++) {
    $user = json_decode($array[$i],true);
    if($user["usuario"]==$datos["username"]){
      if (password_verify($datos["password"],$user["password"])) {
        echo "FELICITACIONES";
      }else {
        // code...
      }
    }

  }

}













 ?>
