<?php

/*
localhost= endereço do banco,usuario,senha do banco, nome do banco
*/
		$conn = new mysqli("localhost","root", "091184", "dbphp7");


if ($conn->connect_error) {
	echo "Errro: ". $conn->connect_error;
}


//mostrar usuario
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");


$data = array();
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	array_push($data, $row);
}

echo json_encode($data);

?>

		