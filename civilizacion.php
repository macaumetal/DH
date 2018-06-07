<?php
		class civilization{
			/*Atributos*/
			public $ataque;
			public $defensa;
			public $foto;
			public $tecnologia;

			/*Metodos*/ /*son como las funciones, pero solo en objetos. SIEMPRE van a devolver algo*/
			public function atacar(){
				echo "Estoy atacando";
			}
		}


?>

<?php
	$civi = new civilization();/*estoy declarando una variable $civi de tipo civilization*/
	$civi ->atacar();
?>