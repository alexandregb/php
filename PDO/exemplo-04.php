<?php

/*
localhost= endereço do banco,nome do banco,usuario,senha do banco
*/

//CONEXÃO COM O BANCO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","091184");

//mostrar usuario
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID;");

$login = "Alexandre g";
$password = "00000";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!!";

?>

		