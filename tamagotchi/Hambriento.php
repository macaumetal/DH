<?php

include_once "Estado.php";
include_once "Feliz.php";

class Hambriento extends Estado{

    public function come(){
        return new Feliz();
    }
}
?>