<?php

        // OPIONES DE CONEXION
        $dsn = 'mysql:host=localhost;dbname=movies_db;charset=utf8mb4';
        $db_user = 'root';
        $db_pass = '';

        //CREACION DEL PDO
        $db = new PDO($dsn, $db_user, $db_pass);//creo el nuevo objeto
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $traer = "SELECT id, name FROM genres ORDER BY name";
        $query = $db->query($traer);
        $generos = $query->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($generos);exit;

 if ($_POST){   
            // Verificamos que la película exista
      
            $existe = "SELECT id FROM movies WHERE title=:title";

            $title = "";

            $queryPreparada = $db->prepare($existe);

            $queryPreparada->bindParam(":title", $title, PDO::PARAM_STR);

            $title = $_POST["titulo"];

            $queryPreparada->execute();

            $resultado = $queryPreparada->fetch(PDO::FETCH_ASSOC);
            // var_dump($resultado);exit;

      

    if ($resultado === false) {

       try{ //STATEMENT Y PREPARACION DE LA QUERY
        $sql = 'INSERT INTO movies (title, rating, awards, length, release_date, genre_id) VALUES (:title, :rating, :awards, :length, :release_date, :genre_id)';
         
          $rating = "";
          $title = "";
          $awards = "";
          $length = "";
          $release_date = "";
          $genre_id = "";

        $stmt = $db->prepare ($sql);

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
    catch (\Exception $e) {
     echo $e->getMessage();
   }

} else {

try {
  // Query para actualizar datos
  $sql = "UPDATE movies SET awards = :awards, length = :length, release_date = :release_date, genre_id = :genre_id WHERE id = :id";

   // $rating = "";
   $id = "";
   $title = "";
   $awards = "";
   $length = "";
   $release_date = "";
   $genre_id = "";

   $stmt = $db->prepare($sql);

   // $stmt->bindParam(":rating", $rating, PDO::PARAM_INT);
    $stmt->bindParam(":awards", $awards, PDO::PARAM_INT);
    $stmt->bindParam(":length", $length, PDO::PARAM_INT);
    $stmt->bindParam(":release_date", $release_date, PDO::PARAM_STR);
    $stmt->bindParam(":genre_id", $genre_id, PDO::PARAM_INT);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    // $rating = $_POST["rating"];
    $id = $resultado["id"];
    $title = $_POST["titulo"];
    $awards = $_POST["premios"];
    $length = $_POST["duracion"];
    $release_date = $_POST["anio"] . "-" . $_POST["mes"] . "-" . $_POST["dia"];
    $genre_id = $_POST["genero"];

    $stmt->execute();
} catch (\Exception $e) {
  echo $e->getMessage();
}
}
}

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
                    <?php foreach ($generos as $genero): ?>
                        <option value="<?= $genero['id']?>"> <?= $genero['name'] ?></option>
                    <?php endforeach ?>

                             
                    
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>