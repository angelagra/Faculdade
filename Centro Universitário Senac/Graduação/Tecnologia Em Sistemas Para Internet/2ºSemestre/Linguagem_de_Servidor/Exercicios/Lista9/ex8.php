<html>
	<meta charset="utf-8">
</html>
<?php


		//Dados do banco
		
		// 2017
		$dbhost = "foxtrot-pi.database.windows.net";   #Nome do host // 2017
		$db = "foxtrot";   #Nome do banco de dados
		$user = "TSI"; #Nome do usuário
		$password = "SistemasInternet123";   #Senha do usuário


$conninfo = "Driver={SQL Server};Server=$dbhost;Port=1433;Database=$db;";
if ($conn = odbc_connect($conninfo,$user,$password))
	echo "Conectado."; 
else echo "Faiô. :(";

echo "<br><br>";
$sql = 'select * from Produto';

$res = odbc_exec($conn, $sql);
//print_r($res);

while($linha=odbc_fetch_array($res)){
		/*Escreve cada linha da tabela*/
		echo "IdProduto: ".$linha['idProduto']. "<br>"."Nome do Produto: " .$linha['nomeProduto']. "<br>" ."Descrição do Produto:".$linha['descProduto']."<br><br>";
		//print_r($linha);
}

//odbc_close($conn);//desconecta o banco



?>