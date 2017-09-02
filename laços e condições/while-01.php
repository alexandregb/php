
<?php

$condicao = true;

 while ( $condicao) {
 	
$numero = rand(1, 10);


if($numero === 3){

	echo "três!!!";
	$condicao = false;
}

echo $numero."</br>";
 	
 }
 
$total = 100;
$desconto = 0.9;


do {
	$total*=$desconto;

} while ( $total > 1000);


echo $total."</br>";

 	
 

?>
		