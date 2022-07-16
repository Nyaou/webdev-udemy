<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		
		<?php 

			$salario = 5000;

			function calcularImpostoRenda($salario){
				if($salario <= 1903.98){
					return 'Isento de impostos';
				}else if($salario >= 1903.99 && $salario <= 2826.65){
					return '7,5%';
				}else if($salario >= 2826.66 && $salario <= 3751.05){
					return '15%';
				}else if($salario >= 3751.06 && $salario <= 4664.68){
					return '22,5%';
				}else if($salario >= 4664.68){
					return '27,5%';
				}
			}

		?>

		<h1>Imposto de renda</h1>
		<p>
			<?php	
				echo "o seu salário é de $salario reais <br>";
				echo "portanto o valor do imposto a ser pago é: ";
				echo calcularImpostoRenda($salario);
			?>
		</p>
	</body>
</html>