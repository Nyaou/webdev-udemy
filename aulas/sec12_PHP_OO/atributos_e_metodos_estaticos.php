<?php 
	class Exemplo{

		public static $atributo1 = 'Eu sou um atributo estático';
		public $atributo2 = 'Eu não sou um atributo estático';
		public static function metodo1(){
			echo 'Eu sou um método estático';
		}
		public function metodo2(){
			echo 'Eu não sou um método estático';
		}
	}

	echo Exemplo::$atributo1;
	Exemplo::metodo1();
	// métodos não estáticos podem ser usado porém não são recomendavel
	// atributos estáticos não podem ser acessador com ->
	// o contexto de metódos estáticos não podem ter o this.
?>