<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHp</title>
	</head>
	<body>
		
		<?php 
			
			$usuario_possui_cartao_loja = true;
			$valor_compra = 100;
			$valor_frete = 50;
			$recebeu_desconto_frete = false;

			if($usuario_possui_cartao_loja && $valor_compra >= 400){
				$valor_frete = 0;
			} else if($usuario_possui_cartao_loja && $valor_compra >= 300){
				$valor_frete = 10;
			} else if($usuario_possui_cartao_loja && $valor_compra >= 100){
				$valor_frete = 25;
			} else{
				$recebeu_desconto_frete = false;
			}
		?>
		
		<h1>Detalhes do pedido</h1>
		<p>Possui cartão da loja?
			<?= 
				$usuario_possui_cartao_loja ? 'Sim' : 'Não';
			?>
		</p>
		<p>Valor da compra: <?= $valor_compra ?></p>
		<p>Recebeu desconto no frete?
			<?=
				$teste = $usuario_possui_cartao_loja ? 'Sim' : 'Não';
			?>
		</p>
		<p>Valor do frete: <?= $valor_frete ?></p>
	</body>
</html>