	<?php

	$a = [
		"a"=>"1",
		"b" => "2",
		"c" => "Yo <3 JSON"
];

	
foreach ($a as $key => $value) {
	echo "$key es valor $value <br>";
}
echo "<br>";

$a = json_encode($a);

echo $a;

echo "<br>";

var_dump($a);
echo "<br>";

$b = json_decode($a);

var_dump($b);
echo "<br>";

$nuevo = (array) $b;

var_dump($nuevo);

foreach ($b as $key => $value) {
	echo "$value";
}
echo "<br>";
?>

