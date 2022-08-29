<?php
	//modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;
		//getters setters (overloading / sobrecarregar)
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}
		//getters e setters
		function setNome($nome){
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		function getNome(){
			return $this->nome;
		}

		function getNumFilhos(){
			return $this->numFilhos;
		}

		//métodos
		function resumirCadFunc() {
			return $this->__get('nome') . ' tem '. $this->__get('numFilhos') . ' filho(s)';
		}

		function modificarNumFilhos($numFilhos){
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}

	$y = new Funcionario();
	$y->__set('nome','Jose');
	$y->__set('numFilhos',2);
	echo $y->resumirCadFunc();
	//echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)';

	echo '<br>';
?>