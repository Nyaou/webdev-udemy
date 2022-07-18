<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			$itens = array('sofá','mesa','cadeira');

			foreach($itens as $item){
				echo "$item <br>";

				if($item == 'mesa'){
					echo '(*compre uma mesa e ganha 25%$ de desconto';
				}
			}
		?>
	</body>
</html>