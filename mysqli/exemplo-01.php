<?php

/*
localhost= endereço do banco,usuario,senha do banco, nome do banco
*/
		$conn = new mysqli("localhost","root", "091184", "dbphp7");


if ($conn->connect_error) {
	echo "Errro: ". $conn->connect_error;
}


//inserir usuario
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $pass);

$login= "user"; 
$pass = "55555";

$stmt->execute();

$login= "simone"; 
$pass = "7777";

$stmt->execute();

?>

		