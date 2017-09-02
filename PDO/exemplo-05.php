<?php

/*
localhost= endereço do banco,nome do banco,usuario,senha do banco
*/

//CONEXÃO COM O BANCO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","091184");

//Chama o inicio da transaçao
$conn->beginTransaction();

//mostrar usuario
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 5;


$stmt->execute(array($id));


//$conn->rollback();

$conn->commit();

echo "DELETANDO OK!!";
?>



		