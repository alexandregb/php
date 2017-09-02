<?php

/*
localhost= nome do banco,endereço do banco,usuario,senha do banco
*/

//CONEXÃO COM O BANCO
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","091184");

//mostrar usuario
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


foreach ($results as $row) {
	foreach ($row as $key => $value) {
 echo "<strong>".$key.":</strong>".$value."<br/>";
}

echo "========================================<br/>";
}


?>

		