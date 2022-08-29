<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			// false (true/false) - valores lógicos
			//null e empty - valores especiais

			$funcionario1 = null;
			$funcionario2 = '';	
			$funcionario3 = false;

			//valores null
			
			if(is_null($funcionario1)){
				echo "Sim, a variável1 é null";
			}else{
				echo "Não, a variável1 não é null";
			}

			if(is_null($funcionario2)){
				echo "Sim, a variável2 é null";
			}else{
				echo "Não, a variável2 não é null";
			}

			if(is_null($funcionario3)){
				echo "Sim, a variável2 é null";
			}else{
				echo "Não, a variável2 não é null";
			}
			
			//valores vazios
			if(empty($funcionario1)){
				echo "Sim, a variável1 é vazia";
			}else{
				echo "Não, a varivável1 não é vazia";
			}

			if(empty($funcionario2)){
				echo "Sim, a variável2 é vazia";
			}else{
				echo "Não, a varivável2 não é vazia";
			}

			if(empty($funcionario3)){
				echo "Sim, a variável3 é vazia";
			}else{
				echo "Não, a varivável3 não é vazia";
			}
		?>
	</body>
</html>