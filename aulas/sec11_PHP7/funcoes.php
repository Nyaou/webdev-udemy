<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		
		<?php 
			//void
			function exirbirBoasVindas(){
				echo "Bem vindo ao curso de PHP";
			}

			//return 
			function calcularAreaTerreno($largura, $comprimento){
				$area = $largura * $comprimento;
				return $area;
			}

			echo calcularAreaTerreno(5,25);
		?>
	</body>
</html>