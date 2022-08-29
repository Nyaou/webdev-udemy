<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 

			$lista_coisas = array();

			$lista_coisas['frutas'] = array(
				1 => 'banana',
				2 => 'maça',
				3 =>'morango',
				4 => 'uva');
			$lista_coisas['pessoas'] = [
				1 => 'João',
				2 => 'José',
				3 => 'Maria'];

			echo $lista_coisas['pessoas'][3]


		?>
	</body>
</html>