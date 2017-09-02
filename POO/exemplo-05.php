<?php


//exemplo de encapsulamento
class Pessoa{
	
	public $nome = "Alexandre garcia"; //todo mundo ver
	protected $idade = 32; /
	private $senha = "123"; // nem mesmo as classes que herdam podem acessar


	public function verDados(){

		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}

}

$objeto = new Pessoa();
//echo $objeto->idade."<br/>";

$objeto->verDados(); //conseguei ver porque esta dentro da classe

?>

		