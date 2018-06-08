<?php
if ($_POST){

$dsn = 'mysql:host=localhost;dbname=movies_db;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';
$db = new PDO($dsn, $db_user, $db_pass);//creo el nuevo objeto
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$stmt = $db->prepare ('INSERT INTO movies (title, rating, awards, length, release_date) VALUES (:title, :rating, :awards, :length, :release_date)');



$title = $_POST['titulo'];
$rating = $_POST['rating'];
$awards = $_POST['premios'];
$length = $_POST['duracion'];
$release_date = $_POST['anio'].'-'.$_POST['mes'].'-'.$_POST['dia'];
$stmt->bindParam(":title", $title, PDO::PARAM_STR);
$stmt->bindParam(":rating", $rating, PDO::PARAM_INT);
$stmt->bindParam(":awards", $awards, PDO::PARAM_STR);
$stmt->bindParam(":length", $length, PDO::PARAM_STR);
$stmt->bindParam(":release_date", $release_date, PDO::PARAM_STR);

$stmt->execute(); 








}
$dsn = 'mysql:host=localhost;dbname=movies_db;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';
$db = new PDO($dsn, $db_user, $db_pass);
$statement = $db->query("SELECT id, name FROM genres");
$resultado = $statement->fetchAll(PDO::FETCH_ASSOC); // es un metodo para que nos traiga todo en modo de array


var_dump($resultado);
?>

<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="premios" id="premios"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select><br>
                <label>Genero</label>
                <select name="genero">
                    <option value="<?php echo $value[$clave]; ?>"><?php foreach ($resultado as $key => $value) {
                                        foreach ($value as $clave => $valor) {

                                            echo $value[$clave];
                                            echo"<br>";
                                        }
        
                                        } ?>
                                                
                    </option>
                            
                    
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>