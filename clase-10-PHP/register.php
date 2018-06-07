<?PHP
include_once ("functions.php");

$archivo = "usuarios.json";

if ($_POST) {
     $arrayDeErrores = validarRegister($_POST);
}

$usuarios = file_get_contents($archivo);
var_dump($usuarios);
$usuarios_array = json_decode($usuarios, true);
$New_User = "mon";
$usuarios_array[] = $New_User;
file_put_contents($archivo, json_encode($usuarios_array));




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value=''/>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='nameid' value="<?php if (isset($_POST ['name'])) {
                                                                               echo $_POST ['name']; }
                                                                               else {
                                                                                echo " ";
                                                                               }
                                                                            ;?>" maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value="<?php if (isset($_POST ['email'])) {
                                                                               echo $_POST ['email']; }
                                                                               else {
                                                                                echo " ";
                                                                               }
                                                                            ;?>" maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value="<?php if (isset($_POST ['username'])) {
                                                                               echo $_POST ['username']; }
                                                                               else {
                                                                                echo " ";
                                                                               }
                                                                            ;?>" maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='container'>
                    <label for='cpassword' >Confirmar Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='cpassword' name='cpassword' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
