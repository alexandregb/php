<?php



class Endereco{
	
	private $logradoouro;
	private $numero;
	private $cidade;

	function __construct($a, $b, $c)
	{
		$this->logradoouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}


	function __destruct()
	{
		var_dump("DESTRUIR");
	}

	function __toString(){
		return $this->logradoouro.", ".$this->numero.", ".$this->cidade;
	}

}



$meuEndereco = new Endereco("Rua ademar", "123", "Santos-sp");

var_dump($meuEndereco);

echo $meuEndereco;


?>

		