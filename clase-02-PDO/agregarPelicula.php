<?php
if ($_POST){
// OPIONES DE CONEXION
$dsn = 'mysql:host=localhost;dbname=movies_db;charset=utf8mb4';
$db_user = 'root';
$db_pass = '';

//CREACION DEL PDO
$db = new PDO($dsn, $db_user, $db_pass);//creo el nuevo objeto
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



//*VER SI EXITE EL TITULO A AGREGAR

try{
    $existe= "SELECT id FROM movies WHERE title=:title":


    $queryPreparada = $db->prepare($existe);
    $queryPreparada->bindParam(":title", $title, PDO::PARAM_STR);

    $title = $_POST['titulo'];

    $queryPreparada->execute();

    $resultado = $queryPreparada->fetch(PDO::FETCH_ASSOC);
}




//STATEMENT Y PREPARACION DE LA QUERY
$stmt = $db->prepare ('INSERT INTO movies (title, rating, awards, length, release_date, genre_id) VALUES (:title, :rating, :awards, :length, :release_date, :genre_id)');

//BINDEO
$stmt->bindParam(":title", $title, PDO::PARAM_STR);
$stmt->bindParam(":rating", $rating, PDO::PARAM_INT);
$stmt->bindParam(":awards", $awards, PDO::PARAM_STR);
$stmt->bindParam(":length", $length, PDO::PARAM_STR);
$stmt->bindParam(":release_date", $release_date, PDO::PARAM_STR);
$stmt->bindParam(":genre_id", $genre_id, PDO::PARAM_STR);

//ASIGNACION DE VALORES
$title = $_POST['titulo'];
$rating = $_POST['rating'];
$awards = $_POST['premios'];
$length = $_POST['duracion'];
$release_date = $_POST['anio'].'-'.$_POST['mes'].'-'.$_POST['dia'];
$genre_id = $_POST['genero']; 



$stmt->execute(); 






}

$statement = $db->query("SELECT id, name FROM genres ORDER BY name");
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
                    <option value="">Año</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select><br>
                <label for="genero">Genero</label>
                <select name="genero" id="genero">
                    <option value="" selected disabled=>Elija genero</option>
                    <?php foreach ($resultado as $value): ?>
                        <option value="<?php echo $value['id']?>"> <?php echo $value['name'] ?></option>
                    <?php endforeach ?>

                            
                    
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>