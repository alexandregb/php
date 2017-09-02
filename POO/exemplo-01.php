
<?php

/**
* 
*/
class Pessoa{//classe

	public $nome; //atributo



		public function falar(){	//metodo

		return "O meu nome é ".$this->nome;
			}

}


$alexandre = new Pessoa();
$alexandre->nome = "Alexandre";
echo $alexandre->falar();

?>
		
		