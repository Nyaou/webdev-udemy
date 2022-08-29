<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		
		<?php 
			//operadores lógicos
			// E : and ou && -> retorna verdadeiro se todas as alternativas forem verdadeiras
			// OU : or ou || -> retorna verdadeiro se alguma das alternativas forem verdadeiras
			// XOR : xor -> retorna true se alguma das alternativas forem verdaderias, mas não ambas
			// NOT : ! -> inverte o valor lógico

			if(4 == 4 XOR 1 >= 15){
				echo 'verdadeiro';
			}else{
				echo 'falso';
			}
		?>
		
	</body>
</html>