
<?php

$meses = array (
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"

	);

foreach ($meses as $index => $mes) {
	echo "Indice é: ". $index."<br/>";
	echo "Mês é: ". $mes."<br/>";
	
	}

?>
		<form>

			<input type="text" name="nome">
			<input type="text" name="nascimento">
			<input type="submit" name="Enviar">
		</form>

		<?php
		if(isset($_GET)){

		foreach ($_GET as $key => $value) {
			echo "Nome do campo: ". $key."<br/>";
			echo "valor do campo: ". $value."<br/>";
			echo "<hr>";

			}

		}

?>