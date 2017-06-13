<?php

	$db_host = "foxtrot-pi.database.windows.net";
	$db_name = "foxtrot";//nome do banco de dados
	$user = "TSI"; //nome usuario
	$password = "SistemasInternet123";//senha usuario
	$dsn = "Driver={SQL Server}; Server=$db_host; Port=1433; Database=$db_name;";

	function login($dsn, $user, $password){

		if ($conn = odbc_connect($dsn,$user,$password)){
	    echo "Conectado - :D"; 
		}else echo "ERRO. :(";
	}

	function identifica($dsn, $tab = 2){

		$dsn = "Driver={SQL Server}; Server=$db_host; Port=1433; Database=$db_name;";

		$sql = 'select * from Produto';

	}



	
echo "<br><br>";
$sql = 'select * from professor';
 
$res = odbc_exec($conn, $sql);
//print_r($res);
 
while($linha=odbc_fetch_array($res)){
        /*Escreve cada linha da tabela*/
        echo $linha['codProfessor'].'-'.$linha['email']."<br><br>";
        //print_r($linha);
}
?>