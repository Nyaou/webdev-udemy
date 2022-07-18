<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 

			$numeros_sorteados = [];

			while(count($numeros_sorteados) < 6){

				$numero_sorteado = rand(1,60);

				if(count($numeros_sorteados) == 0){
					$numeros_sorteados[] = $numero_sorteado;

				} else if(in_array($numero_sorteado, $numeros_sorteados)){

				} else {
					$numeros_sorteados[] = $numero_sorteado;
				}

			}



		?>
		<h1>Os números sorteados foram:</h1>
		<p>
			<?php 
				echo "Foram sorteados " . count($numeros_sorteados) . " numeros. <br>";
				echo "os numeros sorteados foram: " . implode(', ', $numeros_sorteados);
			?>
		</p>
	</body>
</html>