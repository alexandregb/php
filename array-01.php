
<?php

$frutas = array ("laranja", "maça", "morango", "abacaxi", "melancia");
 	
 	print_r($frutas);
 echo "<br/>";

$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

$carros [1][0] = "FORD";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "Eco Sport";


echo $carros[0][3];
 echo "<br/>";

echo end($carros[1]);
 echo "<br/>";

 $pessoas = array ();

  array_push($pessoas,array(
 	'nome'=>'Alexandre',
 	'idade'=>32
 	));

   array_push($pessoas,array(
 	'nome'=>'TOM',
 	'idade'=>2
 	));

print_r($pessoas[0]['nome']);
 echo "<br/>";
?>
		