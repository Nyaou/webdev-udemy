<?php 

	class Carro extends Veiculo{
		public $teto_solar = '';

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}
		function abrirTetoSolar(){

		}

		function alterarPosicaoVolante(){

		}
	}

	class Moto extends Veiculo{
		public $contra_peso_guidao = '';

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar(){

		}

		function trocarMarcha(){
			echo 'Desengatar a embreagem com a mão e engatar a marcha com o pé';
		}
	
	}

	class Veiculo{
		public $placa = '';
		public $cor = '';

		function acelerar(){
			echo "Acelerando cuidado!";
		}

		function freiar(){
			echo "Freiando!";
		}

		function trocarMarcha(){
			echo 'Desengatar a embreagem com o pé e engatar a marcha com o mão';
		}
	}

	$carro = new Carro('ABCDE','Branco');

	$moto = new Moto('ABC3G45','Preta');

	$carro->trocarMarcha();
	echo "<br>";
	$moto->trocarMarcha();

?>