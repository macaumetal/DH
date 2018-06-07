<?php
include "Estado.php";
include "Feliz.php";
include "Hambriento.php";
include "Sediento.php";
include "Triste.php";

class Tamagochi{
    private $estado;

    public function __construct(){
        $numero = rand(1,4);
        switch ($numero) {
            case 1: $this->estado = new Feliz(); break;
            case 2: $this->estado = new Triste(); break;
            case 3: $this->estado = new Hambriento(); break;
            case 4: $this->estado = new Sediento(); break;
        }

    }

    public function come(){
        $this->estado = $this->estado->come();
    }
    public function bebe(){
        $this->estado = $this->estado->bebe();
    }
    public function mimo(){

    }

    public function getEstado(){
        return $this->estado;
    }
}
?>

<?php
    $tamagochi = new Tamagochi();
    var_dump($tamagochi->getEstado());
    $tamagochi->bebe();
    var_dump($tamagochi->getEstado());


?>