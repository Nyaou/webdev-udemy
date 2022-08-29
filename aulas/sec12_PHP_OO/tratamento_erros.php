<?php

	try {
		echo '<h3> ** Try *** </h3>';

		//$sql = 'Select *from clientes';
		//mysql_query($sql); //Erro

		if(!file_exists('require_arquivo_a.php')){
			throw new Exception("Error Processing Request");
		}

	} catch(Error $e){
		echo '<h3> *** Catch *** </h3>' . $e;
		//armazenar esse erro em banco de dados
	}catch( Exception $e){
		echo '<h3> *** Catch *** </h3>' . $e;
	}
