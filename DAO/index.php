<?php


		require_once("config.php");


require_once('config.php');
		//Buscando usuario por parametro
	$user = new Usuario();
	$user->loadbyId(6);
	echo $user;
	

?>
