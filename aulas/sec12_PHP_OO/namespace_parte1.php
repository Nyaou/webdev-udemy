<?php

	namespace A;

	class Client implements \B\CadastroInterface{
		public $nome = 'Jorge';

		public function __construct(){
			print_r(get_class_methods($this));
		}

		public function __get($attr){
			return $this->$attr;
		}

		public function remover(){
			echo "remover";
		}
	}

	interface CadastroInterface{
		public function salvar();
	}


	namespace B;
	class Client implements \A\CadastroInterface{
		public $nome = 'Jamilton';

		public function __construct(){
			print_r(get_class_methods($this));
		}
		
		public function __get($attr){
			return $this->$attr;
		}

		public function salvar(){
			echo "salvar";
		}
	}


	interface CadastroInterface{
		public function remover();
	}

	$c = new \B\Client();
	print_r($c);
	echo $c->__get('nome');
?>