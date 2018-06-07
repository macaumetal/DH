<?php
include_once("functions.php");

if ($_POST) {
	$errores = validarDatos($_POST);
	if(empty($errores)){
        $errorExiste = yaExiste($_POST);
        if (empty($errorExiste)) {
     		$usuario = crearUsuario($_POST);
    		var_dump($usuario);
    		guardarUsuario($usuario);
        }
	}
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
		<link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                                <legend>Registrate</legend>
                                <?php
                                if (!$errorExiste($datos)) {
                                    # code...
                                }

                                ?>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span class='error'><?php echo isset($errores["name"])? $errores["name"]:"";?> </span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'><?php echo isset($errores["email"])? $errores["email"]:"";?> </span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'><?php echo isset($errores["username"])? $errores["username"]:"";?> </span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'><?php echo isset($errores["password"])? $errores["password"]:"";?> </div>
                </div>

                <div class='container' style='height:80px;'>
                    <label for='repassword' >Repetir Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='repassword' name='cpassword' id='repassword' maxlength="50" />
                    <div id='register_repassword_errorloc' class='error' style='clear:both'><?php echo isset($errores["cpassword"])? $errores["cpassword"]:"";?> </div>
                </div>


                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
