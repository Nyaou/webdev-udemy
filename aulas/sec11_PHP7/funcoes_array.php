<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			$array = ['Banana','Maçã','Limão','Morango'];

			$array1 = ['Teste1','Teste2','Teste3'];

			$array2 = ['Teste4','Teste5'];

			$retorno = is_array($array);

			$chaves_array = array_keys($array);

			sort($array); //true ou false, regorganiza os índice

			asort($array); //true ou false, reorganiza e preserva o índice

			count($array);

			$array5 = array_merge($array,$array1,$array2);

			$string = '26/04/2018';
			$array6 = explode('/',$string); // retorna um array

			$array7 = ['a','b','x','y'];
			implode(',',$array7); // retonra uma string

			if($retorno){
				echo 'Sim, é um array';
			}else{
				echo 'Não é um array';
			}

		?>
	</body>
</html>