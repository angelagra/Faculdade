<?php
		//Dados do banco
		
		// 2016
		$dbhost = "koo2dzw5dy.database.windows.net";   #Nome do host // 2016
		$db = "SenaQuiz";   #Nome do banco de dados
		$user = "TSI"; #Nome do usuário
		$password = "SistemasInternet123";   #Senha do usuário


$conninfo = "Driver={SQL Server};Server=$dbhost;Port=1433;Database=$db;";
if ($conn = odbc_connect($conninfo,$user,$password))
	echo "Conectado."; 
else echo "Faiô. :(";

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