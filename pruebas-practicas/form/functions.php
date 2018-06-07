<?php

$errores = [];

if (isset ($_POST['nombre']) && $_POST['nombre'] == ""){// si, esta seteado nombre en POST y nombre en POST esta vacio
  $errores['nombre'] =  "Se requiere el nombre";//imprime esto
}

if (isset ($_POST['mail']) ){// si esta seteado mail en POST
  if ($_POST['mail'] == ""){//si mail en POST esta vacio
 $errores['mail'] = "Por favor ingrese un mail válido";//imprimi esto
  }elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){//si no esta vacio, validalo
     $errores['mail'] = "Corrobore su direccion de email";
     }
}

if (isset ($_POST['contrasena']) && $_POST['contrasena'] == ""){// si, esta seteado ontraseña en POST y contraseña en POST esta vacio
  $errores ['contrasena'] = "Ingrese una contraseña";//imprime esto
}

if (isset ($_POST['confirmar-contrasena']) && $_POST['confirmar-contrasena'] !== $_POST['contrasena'] ){// si, esta seteado ontraseña en POST y contraseña en POST no esta vacio y es distinto a contraseña.
  $errores ['confirmar-contrasena'] = "Confirme su contraseña";//imprime esto
}


var_dump($errores);

?>