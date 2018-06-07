<?php

if($_POST){// si s envio el formulario
  $color= $_POST["color"];//la variable color recibe el valor color del form
  setcookie("colorFondo",$color, time()+3600);//seteo la cookie dandole el nombre colorFondo, el valor $color, y el tiemp de
                                              //expiracion
}

switch ($frases) {
  case 'El camino es tu mundo1':
    break;
  case 'El camino es tu mundo2':
    break;
    case 'El camino es tu mundo3':
    break;
    case 'El camino es tu mundo4':
    break;
  default:
    break;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style=background-color: <?php echo isset($_COOKIE['colorFondo'])? $_COOKIE['colorFondo']:"";  ?>">
    <form class="" action="" method="post">
      <select class="" name="color">
        <option value="blue">azul</option>
        <option value="red">rojo</option>
        <option value="yellow">amarillo</option>
      </select>
      <input type="submit" name="" value="cambiar color">
    </form>

<p><?php echo $frases (rand(1,4)) ?></p>

  </body>
</html>
