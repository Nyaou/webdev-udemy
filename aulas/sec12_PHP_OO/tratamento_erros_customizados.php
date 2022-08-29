<?php
	
	class MinhaExcepetionCustomizada extends Exception{
		private $erro = '';

		public function __construct($erro){
			$this->erro = $erro;
		}

		public function exivirMensagemCustomizada(){
			return $this->erro;
;		}
	}

	try{

		throw new MinhaExcepetionCustomizada('Esse é um potencial erro');

		//Error (php)
		//Exception (programadores)
		//Customizadas (programadores)

	}catch ( MinhaExcepetionCustomizada $e ){
		echo $e->exivirMensagemCustomizada();
	}