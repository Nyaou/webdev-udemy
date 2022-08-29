<?php 
	class Pai{
		private $nome = 'Jorge';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz';

		/*
		public function __get($attr){
			return $this->$attr;
		}

		public function __set($attr, $value){
			$this->$attr = $value;
		}	
		*/

		/*
		public function getNome(){
			return $this->nome;
		}

		public function setNome($value){

			if(strlen($value) >= 3){
				$this->nome = $value;
			}
		}
		*/

		private function executarMania(){
			echo 'Assobiar';
		}

		protected function responder(){
			echo 'Oi';
		}

		public function executarAcao(){
			$x = rand(1,10);

			if($x >= 1 && $x <=8){
				$this->executarMania();
			}else{
				$this->responder();
			}
		}
	}

	class Filho extends Pai{
		public function __construct(){
			//debug de atributos e métodos herdados
			print_r(get_class_methods($this));
		}
		public function __get($attr){
			return $this->$attr;
		}

		public function __set($attr, $value){
			$this->$attr = $value;
		}
		/*
		public function getAtributo($attr){
			return $this->$attr;
		}

		public function setAtributo($attr,$value){
			$this->$attr = $value;
		}
		*/
	}
	/*
	$pai = new Pai();
	$pai->executarAcao();
	*/

	$filho = new Filho;

	print_r($filho);
	//exibir os métodos do objeto
	print_r(get_class_methods($filho));
	// __get e __set criados no objeto pai conseguem acessar os atributos privados dele em seus objetos filhos
	$filho->__get('nome');
?>