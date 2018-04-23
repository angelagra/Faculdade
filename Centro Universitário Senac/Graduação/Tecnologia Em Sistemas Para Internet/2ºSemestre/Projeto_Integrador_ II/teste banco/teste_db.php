<?php

	$db_host = "10.135.0.53\sqledutsi";
	$db_name = "Kanino";
	$user = "TSI";
	$password = "SistemasInternet123";
	$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";

	if($db = odbc_connect($dsn, $user, $password)){

		if(odbc_exec($db,"INSERT INTO Usuario(loginUsuario,
											senhaUsuario,
											nomeUsuario,
											tipoPerfil,
											usuarioAtivo) 
									  VALUES('angelagraciete84@gmail.com', 
									  		'123456',
											'Angela Graciete', 
											 'A', 
											 '1')")){

			echo " <h1>Usuário Cadastrado Com Sucesso !!!!!!<h1>";
		}

	}else{

		echo "<h1> OPPPAAA Erro Ao Cadastrar :( </h1>";
	}

	

?>