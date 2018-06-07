<?php

require_once("funciones.php");

$meses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
    7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
];

$categorias = [
    ['id' => 1, 'nombre' => 'Historia'],
    ['id' => 2, 'nombre' => 'Geografía'],
    ['id' => 3, 'nombre' => 'Deportes'],
    ['id' => 4, 'nombre' => 'Arte'],
    ['id' => 5, 'nombre' => 'Ciencia'],
    ['id' => 6, 'nombre' => 'Espectaculos'],
];


$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;


if($_POST)
{
    $arrayDeErrores = [];
    $arrayDeErrores = validarRegistracion($_POST);

    if(count($arrayDeErrores) == 0) {
      header("Location:resultado.php");exit;
    }
}

?>

<?php
$title = 'REGISTRACIÓN';
require('templates/open.php');
?>
        <div class="row">
            <form role="form" action="registracion.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="" placeholder="Ingrese Nombre">
                        <span class='error'><?php echo isset($arrayDeErrores["nombre"])? $arrayDeErrores["nombre"]:"";?> </span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="" placeholder="Ingrese Apellido"><span class='error'><?php echo isset($arrayDeErrores["apellido"])? $arrayDeErrores["apellido"]:"";?> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" value="" placeholder="Ingrese Nombre de Usuario"><span class='error'><?php echo isset($arrayDeErrores["username"])? $arrayDeErrores["username"]:"";?> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="" placeholder="Ingrese Email"><span class='error'><?php echo isset($arrayDeErrores["email"])? $arrayDeErrores["email"]:"";?> </span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email-confirm">Confirmar Email</label>
                        <input type="text" class="form-control" id="email-confirm" name="email_confirm" value="" placeholder="Ingrese Confirmación Email"><span class='error'><?php echo isset($arrayDeErrores["email_confirm"])? $arrayDeErrores["email_confirm"]:"";?> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña"><span class='error'><?php echo isset($arrayDeErrores["contrasena"])? $arrayDeErrores["contrasena"]:"";?> </span>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="contrasena-confirm">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña"><span class='error'><?php echo isset($arrayDeErrores["contrasena_confirm"])? $arrayDeErrores["contrasena_confirm"]:"";?> </span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <div>
                        <input type="file" name="avatar"/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sexo</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_masculino" value="0"> Masculino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_femenino" value="1"> Femenino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_otros" value="2"> Otro
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label> Fecha de Nacimiento</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" name="fnac_dia">
                                <option value="">Día</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="fnac_mes">
                                <option value="">Mes</option>
                                <option value="ene">Enero</option>
                                <option value="feb">Febrero</option>
                                <option value="mar">Marzo</option>
                                <option value="abr">Abril</option>
                                <option value="may">Mayo</option>
                                <option value="jun">Junio</option>
                                <option value="jul">Julio</option>
                                <option value="ago">Agosto</option>
                                <option value="sep">Septiembre</option>
                                <option value="oct">Octubre</option>
                                <option value="nov">Noviembre</option>
                                <option value="dic">Diciembre</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="fnac_anio">
                                <option value="">Año</option>
                                <option value="">1930</option>
                                <option value="">1931</option>
                                <option value="">1932</option>
                                <option value="">1933</option>
                                <option value="">1934</option>
                                <option value="">1935</option>
                                <option value="">1936</option>
                                <option value="">1937</option>
                                <option value="">1938</option>
                                <option value="">1939</option>
                                <option value="">1940</option>
                                <option value="">1941</option>
                                <option value="">1942</option>
                                <option value="">1943</option>
                                <option value="">1944</option>
                                <option value="">1945</option>
                                <option value="">1946</option>
                                <option value="">1947</option>
                                <option value="">1948</option>
                                <option value="">1949</option>
                                <option value="">1950</option>
                                <option value="">1951</option>
                                <option value="">1952</option>
                                <option value="">1953</option>
                                <option value="">1954</option>
                                <option value="">1955</option>
                                <option value="">1956</option>
                                <option value="">1957</option>
                                <option value="">1958</option>
                                <option value="">1959</option>
                                <option value="">1960</option>
                                <option value="">1961</option>
                                <option value="">1962</option>
                                <option value="">1963</option>
                                <option value="">1964</option>
                                <option value="">1965</option>
                                <option value="">1966</option>
                                <option value="">1967</option>
                                <option value="">1968</option>
                                <option value="">1969</option>
                                <option value="">1970</option>
                                <option value="">1971</option>
                                <option value="">1972</option>
                                <option value="">1973</option>
                                <option value="">1974</option>
                                <option value="">1975</option>
                                <option value="">1976</option>
                                <option value="">1977</option>
                                <option value="">1978</option>
                                <option value="">1979</option>
                                <option value="">1980</option>
                                <option value="">1981</option>
                                <option value="">1982</option>
                                <option value="">1983</option>
                                <option value="">1984</option>
                                <option value="">1985</option>
                                <option value="">1986</option>
                                <option value="">1987</option>
                                <option value="">1988</option>
                                <option value="">1989</option>
                                <option value="">1990</option>
                                <option value="">1991</option>
                                <option value="">1992</option>
                                <option value="">1993</option>
                                <option value="">1994</option>
                                <option value="">1995</option>
                                <option value="">1996</option>
                                <option value="">1997</option>
                                <option value="">1998</option>
                                <option value="">1999</option>
                                <option value="">2000</option>
                                <option value="">2001</option>
                                <option value="">2002</option>
                                <option value="">2003</option>
                                <option value="">2004</option>
                                <option value="">2005</option>
                                <option value="">2006</option>
                                <option value="">2007</option>
                                <option value="">2008</option>
                                <option value="">2009</option>
                                <option value="">2010</option>
                                <option value="">2011</option>
                                <option value="">2012</option>
                                <option value="">2013</option>
                                <option value="">2014</option>
                                <option value="">2015</option>
                                <option value="">2016</option>
                                <option value="">2017</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Categorías</label>
                    <div>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="categorias[]" value="Historia">
                                  Historia
                                </label>
                                <br>
                                <label>
                                  <input type="checkbox" name="categorias[]" value="Geografia">
                                  Geografia
                                </label>
                                <br>
                                <label>
                                  <input type="checkbox" name="categorias[]" value="Deportes">
                                  Deportes
                                </label>
                                <br>
                                <label>
                                  <input type="checkbox" name="categorias[]" value="Arte">
                                  Arte
                                </label>
                                <br>
                                <label>
                                  <input type="checkbox" name="categorias[]" value="Ciencia">
                                  Ciencia
                                </label>
                                <br>
                                <label>
                                  <input type="checkbox" name="categorias[]" value="Espectaculos">
                                  Espectaculos
                                </label>

                            </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="5"><?php echo $descripcion ?></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones
                    </label>
                </div>
                <input type="submit" name="btn_submit" class="btn btn-info" value="Registrarme"/>
            </form>
        </div>
<?php require('templates/close.php'); ?>
