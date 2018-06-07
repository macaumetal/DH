<?php
function validarDatos($datos){
  $errores = [];
  if ($datos["name"]=="") {
   $errores["name"]="Por favor ingrese su nombre";
  }
  if ($datos["email"]=="") {
    $errores["email"]="Por favor ingrese su email";
  }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    $errores["email"]="Por favor ingrese un email valido";
  }if ($datos["username"]=="") {
   $errores["username"]="Por favor ingrese su usuario";
  }
  if ($datos["password"]=="") {
    $errores["password"]= "Por favor ingrese una contraseña";
  }
  if ($datos ["cpassword"]=="") {
    $errores["cpassword"]= "Por favor reingrese su contraseña";
  }elseif ($datos["password"]!==$datos["cpassword"]) {
    $errores["cpassword"]="Las contraseñas no coinciden";
  }

  return $errores;

}

function yaExiste($datos){
  $errorExiste = [];
  $json= file_get_contents("usuarios.json");//en la variable $json busco el contenido del archivo .json
  $array= json_decode($json,true);//decodifico el .json en la variable $array
  $array = $array["usuarios"]; //dentro del array asociatuvo ingreso a la posicion [usuarios]

  for ($i=0; $i < count($array); $i++) { //un for por la longitud del array
    $user = json_decode($array[$i], true);// en la variable $user decodifico el json que esta en cada posicion del $array
                                          // porque cuando decodifico el .json en la linea 58 me da un array cuyas posiiones son .json

   
      if ($datos["username"]==$user ["username"]) {//si el usuario en el form y el del .json coinciden
        $errorExite["usuario"]="Ya existe un usuario con ese nombre, por favor elija otro";
      }
      if ($datos["email"] == $user["mail"]) {
        $errorExiste["email"]="Ya existe un usuario con ese mail, si no puede recordar susu datos puede resetear su contraseña";
      }
    }
  }
}

}


function crearUsuario($datos){
  return [
    "nombre" => $datos["name"],
    "mail" => $datos["email"],
    "usuario" => $datos ["username"],
    "password" => password_hash($datos["password"],PASSWORD_DEFAULT),
  ];

}

function guardarUsuario($usuario){
  $user= json_encode($usuario);
  $json= file_get_contents("usuarios.json");
  $array= json_decode($json,true);
  $array["usuarios"][]= $user;
  $array= json_encode($array);
  file_put_contents("usuarios.json",$array);
}

function validarLogin ($datos){
  $errores = [];
  if ($datos["username"]=="") {
   $errores["username"]="Por favor ingrese su usuario";
  }
  if ($datos["password"]=="") {
    $errores["password"]= "Por favor ingrese una contraseña";
  }
}

function validarUsuario($datos){//la funcion validarUsuario recibe los $datos de $_POST
  $json= file_get_contents("usuarios.json");//en la variable $json busco el contenido del archivo .json
  $array= json_decode($json,true);//decodifico el .json en la variable $array
  $array = $array["usuarios"]; //dentro del array asociatuvo ingreso a la posicion [usuarios]

  for ($i=0; $i < count($array); $i++) { //un for por la longitud del array
    $user = json_decode($array[$i], true);// en la variable $user decodifico el json que esta en cada posicion del $array
                                          // porque cuando decodifico el .json en la linea 58 me da un array cuyas posiiones son .json

    if ($user["usuario"] == $datos["username"]) {// valido si el usuario dentro del array resultante del .json 
                                                 // coincide con el que me envia el formulario

      if (password_verify ($datos["password"], $user["password"])) { //valido que el password se verifique entre el que tengo en
                                                                     //el .json y el formulario
        echo "Felicitaciones";// si validan los dos, da ok
      }else{
        echo "Chequee su usuario y contraseña";//alguno de los dos esta mal.
      }
    }
  }
}















 ?>
