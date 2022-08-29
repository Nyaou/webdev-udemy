<?php 
	namespace B;
	class Client implements CadastroInterface{
		public $nome = 'Jamilton';

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
		public function remover();
	}
?>