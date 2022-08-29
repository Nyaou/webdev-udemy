<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			//sequencias ( númericos )
			/*
			$lista_frutas = array('banana','maçã','morango');
			$lista_frutas[] = 'Abacate';
			echo "<pre>";
			var_dump($lista_frutas);
			echo "</pre>";
			echo '<br>';
			print_r($lista_frutas);
			*/
			//assosiativos
			$lista_frutas = array(
				'a' => 'banana',
				'b' => 'maçã',
				'c' => 'morango',
				'd' => 'abacate'
			);
			echo $lista_frutas['a'];

		?>
	</body>
</html>