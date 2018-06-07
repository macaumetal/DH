
<h1> Ejercicio 1 </h1> 
<?php



for ($i=0; $i < 100; $i++) { 
	
	echo "$i <br>";
}


?>


<h1> Ejercicio 2 </h1> 

<?php



for ($i=0; $i < rand(0,100); $i++) { 
	
	echo "$i <br>";
}


?>
<h1> Ejercicio 3 </h1> 

<?php



for ($i=1; $i <= 10; $i++) { 
	
	echo $i*2 ." <br>";
}


?>
<h1> Ejercicio ForEach </h1> 

<?php

$user01 = [
	"id" => 12032930,
	"nicname" => "Vendedor ABC",
	"transaciones" => [
			"negativas" => 500,
			"positivas" => 650,
			"neutras" => 140
			],
			"puntos" => 344
];

foreach ($user01 as $key => $value) {
if (is_array($value)) {

foreach ($value as $key2 => $value2) {
	echo "segunda dimensión: $value2 <br>";
}
 } else {
 	echo "primera dimensión: $value <br>";
 }

}



?>

<h1> Ejercicio 12 </h1> 

<?php

$veterinaria = [
	"animal" => "perro",
	"edad" => 5,
	"altura" => "0,60",
	"nombre" => "Sonic",
		
];

foreach ($veterinaria as $dato => $valor) {

	echo "$dato: $valor <br>";
}
 

?>
<h1> Ejercicio 13 </h1> 
<?php

$ceu = [ 
	"Italia"=>"Roma", 
	"Luxembourg"=>"Luxembourg", 
	"Bélgica"=> "Bruselas",
	"Dinamarca"=>"Copenhagen", 
	"Finlandia"=>"Helsinki", 
	"Francia" => "Paris",
	"Slovakia"=>"Bratislava", 
	"Eslovenia"=>"Ljubljana", 
	"Alemania" => "Berlin", 
	"Grecia" => "Athenas",
	"Irlanda"=>"Dublin", 
	"Holanda"=>"Amsterdam", 
	"Portugal"=>"Lisbon", 
	"España"=>"Madrid",
	"Suecia"=>"Stockholm", 
	"Reino Unido"=>"London", 
	"Chipre"=>"Nicosia", 
	"Lithuania"=>"Vilnius",
	"Republica Checa"=>"Prague", 
	"Estonia"=>"Tallin", 
	"Hungría"=>"Budapest", 
	"Latvia"=>"Riga",
	"Malta"=>"Valletta", 
	"Austria" => "Vienna", 
	"Polonia"=>"Warsaw"];

$listaOrdenada = ksort($ceu);

foreach ($ceu as $pais => $capital) {
	
	echo "La capital de $pais es $capital <br>";
}
 
?>


<h1> Ejercicio 14 </h1> 

<?php

$ceu = [
	"Argentina" => [
		"Buenos Aires", 
		"Córdoba", 
		"Santa Fé",
		"EsAmericano" => true,
		"Monumento" => false
		],
	"Brasil" => [
		"Brasilia", 
		"Rio de Janeiro", 
		"Sao Pablo",
		"EsAmericano" => true,
		"Monumento" => false
		],
	"Colombia" => [
		"Cartagena", 
		"Bogota", 
		"Barranquilla",
		"EsAmericano" => true,
		"Monumento" => true
		],
	"Francia" => [
		"Paris", 
		"Nantes", 
		"Lyon",
		"EsAmericano" => false,
		"Monumento" => false
		],
	"Italia" => [
		"Roma", 
		"Milan", 
		"Venecia",
		"EsAmericano" => false,
		"Monumento" => true
		],
	"Alemania" => [
		"Munich", 
		"Berlin", 
		"Frankfurt",
		"EsAmericano" => false,
		"Monumento" => false
	]
];
//echo "<pre>";
//print_r($ceu["Argentina"]["EsAmericano"]);exit;

	foreach ($ceu as $pais => $ciudad) {
		
		if ($ciudad["Monumento"]){

			echo "Estas ciudades tienen monumentos:";

			foreach ($ciudad as $key) {
				
			 	echo "<ul><li>$key</li></ul>";
				
			}
		}

	}



?>