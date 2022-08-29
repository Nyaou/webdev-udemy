<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			
			$funcionarios = array(
				array('nome' => 'João', 'salario' => 2020),
				array('nome' => 'Maria', 'salario' +> 2000),
				array('nome' => 'Júlia', 'salario' => 3000) 
			);
			echo '<pre>';
			print_r($funcionarios);
			echo '</pre>';

			foreach ($funcionarios as $idx => $funcionario) {

				foreach ($funcionario as $idx2 => $valor) {
					echo "$idx2 - $valor";
				};
				echo '<hr/>';
			}


		?>
	</body>
</html>