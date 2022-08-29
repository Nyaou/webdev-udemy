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
	}

	$carro = new Carro('ABCDE','Branco');

	$moto = new Moto('ABC3G45','Preta');

	echo '<pre>';
	print_r($carro);
	echo '<br>';
	print_r($moto);
	echo '</pre>';

	echo "<hr>";
	$carro->acelerar();
	$carro->freiar();

?>