<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			$num = 1;
			echo '-- Início do lool --';
			while($num < 10){

				echo "$num <br>";

				$num++; // critério de parada

				if($num == 2 || $num == 6){
					continue; // muda o fluxo para o ínicio do loop
				}

				if($num > 100){
					break; // quebra o fluxo do loop
				}


				
			}
			echo '-- Fim do loop --';

		?>
	</body>
</html>