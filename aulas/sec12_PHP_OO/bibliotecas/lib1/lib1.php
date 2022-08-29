<?php 
	namespace A;

	class Client implements CadastroInterface{
		public $nome = 'Jorge';

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
		public function salvar();
	}
?>