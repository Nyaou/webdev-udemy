<?php
	class Pessoa {

		public $nome = null;

		function __construct($nome){
			echo 'Objeto iniciado';
			$this->nome = $nome;
		}

		function __destruct(){
			echo 'Objeto removido';
		}

		function __get($atributo){
			return $this->$atributo;
		}

		function correr(){
			return $this->nome . ' está correndo';
		}
	}

	$pessoa = new Pessoa('Jorge');
	echo $pessoa->__get('nome');
	echo '<br>';
	echo $pessoa->correr();

	echo '<br>';
	//unset($pessoa);
?>