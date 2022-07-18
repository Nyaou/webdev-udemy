<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			$texto = 'curso completo de PHP';
			//string to lower
			echo $texto. '<br>';

			echo strtolower($texto) . '<br>';

			echo strtoupper($texto) . '<br>';

			echo ucfirst($texto) . '<br>';

			echo strlen($texto) . '<br>';

			echo str_replace('PHP', 'Javascript', $texto) . '<br>';

			echo substr($texto, 1, 4);

		?>
	</body>
</html>