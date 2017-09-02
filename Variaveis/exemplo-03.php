<?php

//tipos de básicos de dados
$nome = "Alexandre ";
$site = "www.hcode.com.br";
$ano = 1980;
$salario = 5500.99;
$bloqueado = false;

//////////////////////////
//tipos compostos

$frutas = array("abacaxi", "morango", "manga");

echo $frutas[2]."</br>";


$nascimento = new DateTime();

var_dump($nascimento)."</br>";

/////////////////////////////
//tipos especiais
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo)."</br>";

?>