
<?php


$a=10;
$b = 10;
// passagem por parmetro
function trocaValor(&$a){

$a += 50;

return $a;

}

echo $a;
echo "</br>";
echo trocaValor($a);
echo "</br>";
echo $a;


?>
		
		