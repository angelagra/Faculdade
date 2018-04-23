<?php

	function log($login, $senha){

		if ($conn = odbc_connect($dsn,$user,$password)){
	    echo "Conectado - :D"; 
		}else echo "ERRO. :(";


	}

	$user = "TSI"; //nome usuario
	$password = "SistemasInternet123";//senha usuario

	log($user, $password);

?>
