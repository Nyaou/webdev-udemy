<?php 

	session_start();


	//variável que verifica se a autenticacao foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(
		1 => 'Administrativo',
		2 => 'Usuário');
	
	//usuário do sistema
	$usuarios_app = array(
		array('id' => 1,'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 2,'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1),
		array('id' => 3,'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 4,'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2)
	);
	/*
	echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';
	*/

	foreach($usuarios_app as $user){

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}
	if($usuario_autenticado){
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	}else{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}
	/*
	print_r($_GET ou $_POST);

	echo '<br>';

	echo $_GET['email'];
	echo $_GET['senha'];
	*/

	
?>