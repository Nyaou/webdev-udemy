<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 

			$numero = 10.2;

			//ceil -> arredonda o número para cima
			echo ceil($numero) . '<br>';
			//floor -> arredonda o número para baixo
			echo floor($numero) . '<br>';
			//round -> arredonda baseado no valor fracionado. 0 - 4 : arredonda para baixo e 5 - 9 : arredonda para cima
			echo round($numero) . '<br>';
			//rand -> gera um número aleatório
			echo rand() . '<br>';
			echo rand(10,20) . '<br>';
			//getrandmax() -> mostra o número máximo de números aleatatórios que podem ser criados
			echo getrandmax() . '<br>';
			//sqrt -> mostra a raiz quadrada de um número
			echo sqrt($numero);


		?>
	</body>
</html>