<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		
		<?php 
			//gettype() => retorna o tipo da váriavel

				$valor = 10;
				$valor2 = (float) $valor;
				$valor3 = (string) $valor;

				echo gettype($valor) . '<br>';

				echo gettype($valor2) . '<br>';

				echo gettype($valor3);


		?>
	</body>
</html>