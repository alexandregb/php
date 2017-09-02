<?php


//exemplo de hereança
class Documento{
	
	private $numero; // nem mesmo as classes que herdam podem acessar


	public function getNumero(){
		return $this->numero;
	}
	
	public function setNumero($n){
		return $this->numero= $n;
	}

}


class CPF extends Documento{
	
	public function  validar():bool
	{
		$numeroCPF = $this->getNumero();

		//validacao de CPF

		return true;
	}
}

$doc = new CPF();
$doc->setNumero("1111111111");
var_dump($doc->validar());
echo "<br/>";

echo $doc->getNumero();



?>

		