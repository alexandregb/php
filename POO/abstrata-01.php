<?php


//exemplo de interface
interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMancha($marcha);

}

abstract class Automovel implements Veiculo{
		public function acelerar($velocidade){
			echo "O veículo acelerou até ". $velocidade. " km/h";
		}

		public function frenar($velocidade){
			echo "O veículo frenou até ". $velocidade. " km/h";
		}

		public function trocarMancha($marcha){
   for ($i=1; $i <= 5; $i++) { 
             echo "O veiculo colocou a marcha " . $i;
             echo "<br>";
         }	

         	}


}

/**
* 
*/
class DelRey extends Automovel
{
	
	public function empurrar()
	{
	}
}


$carro = new DelRey();
$carro->acelerar(200);



?>

		