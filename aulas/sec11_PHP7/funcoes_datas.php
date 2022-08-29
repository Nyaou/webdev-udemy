<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		<?php 
			/*
			//recuperação da data atual
			//dia/mes/ano horas:minutos
			echo date('d/m/Y H:i') . '<br>';

			echo date_default_timezone_get() . '<br>';

			date_default_timezone_set('America/Sao_Paulo');
			echo date('d/m/Y H:i') . '<br>';
			echo date_default_timezone_get();
			*/

			$data_inicial = '2022/07/17';
			$data_final = '2022/08/16';

			//timestamp
			//01/01/1970 -- retorno em segundos

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo $data_inicial . '-' . $time_inicial;
			echo '<br>';
			echo $data_final . '-'. $time_final;
			echo '<br>';

			$diferença_times = abs($time_final - $time_inicial); //abs -> retornar o valor absoluto

			echo "$diferença_times";

			$segundos_existem_dia = 24 * 60 * 60;

			$diferenca_de_dias_entre_as_datas = $diferença_times / $segundos_existem_dia;
			echo "<br>";

			echo "$diferenca_de_dias_entre_as_datas dias";


		?>
	</body>
</html>