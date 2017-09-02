<?php


		require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Alexadre g");
$cad->setEmail("adhaba@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();


var_dump($cad) ;



?>

		