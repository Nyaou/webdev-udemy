<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			$idade = 70;
			$peso = 50;

			$teste = ($idade >= 16 && $idade <= 69) && $peso >= 50 ? 'Atende aos requisitos' : 'Não atende aos requisitos';

		?>
		<h1>Teste para doar sangue:</h1>
		<?php

			echo "Tudo bem o senhor fez o teste para saber se você pode doar sangue e o resultado está a seguir: <br>";
			echo "o senhor tem $idade anos e pesa $peso kg. <br>";
			echo "com isso o seu resultado é : $teste";
		?>
	</body>
</html>