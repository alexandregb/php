<?php


//exemplo de interface
interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMancha($marcha);

}

class Civic implements Veiculo{
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


$carro = new Civic();
$carro->trocarMancha(1);

?>

		