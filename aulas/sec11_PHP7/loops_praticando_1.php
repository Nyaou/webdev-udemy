<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			$registros1 = array('Título notícia 1', 'Título notícia 2', 'Título notítcia 3');

			$registros2 = [
				array('titulo' => 'Título 1', 'conteudo' => 'Conteúdo 1'),
				array('titulo' => 'Título 2',
					'conteudo' => 'Conteúdo 2'),
				array('titulo' => 'Título 3',
					'conteudo' => 'Conteúdo 3')
			]
			$idx = 0;
			while ($idx < count($registros2)) {
				
				echo '<h3>' . $resgistro2[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros2[$idx]['conteudo'] . '</p>';
				echo '<hr>';

				$idx++;
			}

		?>
	</body>
</html>