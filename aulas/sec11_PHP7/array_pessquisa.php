<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			//in_array() -> true ou false
			//array_search()

			$lista_frutas = ['banana','maçã','morango','uva'];


			$existe = in_array('maçã',$lista_frutas);
			//true -> texto = 1
			//false -> texto = vazio

			if($existe){
				echo "O valor extiste no array";
			}else{
				echo "O valor não existe no arary";
			}

			// retorna para valores não encontrados é null e para valores que foram encontrados ele retorna o indice dele no array
			echo array_search('morango', $lista_frutas);

			

		?>
	</body>
</html>