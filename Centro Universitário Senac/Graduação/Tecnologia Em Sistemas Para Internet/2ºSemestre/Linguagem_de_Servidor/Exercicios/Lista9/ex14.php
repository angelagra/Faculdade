<?php

$db_host = "foxtrot-pi.database.windows.net";
$db_name = "foxtrot";//nome do banco de dados
$user = "TSI"; //nome usuario
$password = "SistemasInternet123";//senha usuario
$dsn = "Driver={SQL Server}; Server=$db_host; Port=1433; Database=$db_name;";

function login($dsn, $user, $password){

	if ($conn = odbc_connect($dsn,$user,$password)){
    echo "Conectado - Usuario e Senha Corretos - :D"; 
	}else echo "Senha ou usuario Incorreto. :(";

}


login($dsn, $user, $password);


?>