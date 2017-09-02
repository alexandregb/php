<?php


//exemplo de encapsulamento
class Pessoa{
	
	public $nome = "Alexandre garcia"; //todo mundo ver
	protected $idade = 32; // a classe e as classes seguidas
	private $senha = "123"; // nem mesmo as classes que herdam podem acessar


	public function verDados(){

		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}
/**
* 
*/
class Programador extends Pessoa{
	public function verDados(){

		echo get_class($this)."<br/>";
		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}

}




$objeto = new Programador();
//echo $objeto->idade."<br/>";

$objeto->verDados(); //conseguei ver porque esta dentro da classe

?>

		