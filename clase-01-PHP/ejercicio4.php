<?php

$animal [] = "gato";
$animal [] = "perro";
$animal [] = "loro";
$animal [] = "toro";
$animal [] = "vaca";
$animal [] = "ornitrrinco";
$animal [] = "elefante";
$animal [0] = "león";
$animal [100] = "ballena";
$animal [16] = "perico";

?>

<?php echo "Me gustan los animales" . " " . $animal [0] . ", " . $animal [1]  . ", " . $animal [2]  . ", " . $animal [3]  . ", " . $animal [4]  . ", " . $animal [5]  . ", " . $animal [6] . ", " . $animal [16] . " y " . $animal [100] ;

	?>
<p><?php
		$auto = [
		"nombre" => "Jorge",
		"marca" => "VW",
		"modelo" => "Bora",
		"color" => "Gris",
		"anio" => "2014",
		"patente" => "HEL 666",
];

	var_dump($auto);
	
$auto [14] = "Sancor Seguros";

	var_dump($auto);

$auto ["poliza"] = "25845";

	var_dump($auto);






	?>
</p>
	
