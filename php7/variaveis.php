<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		
		<?php 
			//strings iniciar com ''  ou ""
			$nome = 'Claudio Jefferson';

			//int
			$idade = 29;

			//float
			$peso = 82.5;

			//booelan
			$fumante_sn = true; //true - 1 ou false vazio


			// -- lógica -- 

			$idade = 30;
		?>
		<h1>Ficha cadastral <h1>
		<br>
		<!-- poderia ser com echo ou print -->
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>
	</body>
</html>