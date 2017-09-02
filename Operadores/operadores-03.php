<?php

//operadores de comparacao


$a = 50;
$b= 60;

var_dump($a > $b);

echo "<br/>";

var_dump($a < $b);

echo "<br/>";

//igual ==
var_dump($a == $b);

echo "<br/>";

//igual de numeraçao e tipo ===
var_dump($a === $b);

echo "<br/>";


//negacao de numeraçao
var_dump($a != $b);

echo "<br/>";

//negacao de numeraçao e tipo ===
var_dump($a !== $b);

echo "<br/>";


//operadores novos

/*spaceship se:
 $a for maior = 1
 $b for maior = -1
 se igual = 0


*/
var_dump($a <=> $b);


// nullcolase

$c = NULL;
$d = 8;
$e = 10;

echo $c ?? $d ?? $e;


?>