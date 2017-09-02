<?php

/*
localhost= endereço do banco,nome do banco,usuario,senha do banco
*/

//CONEXÃO COM O BANCO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","091184");

//mostrar usuario
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "123456";


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!!";
?>

		