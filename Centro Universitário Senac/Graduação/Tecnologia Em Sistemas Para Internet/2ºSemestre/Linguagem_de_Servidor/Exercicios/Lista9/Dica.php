<?php 

insert into imagem (tituloImagem, bitmapImagem) output INSERTED.codImagem  values (?, ?);

//2 - Formas de inserзгo: com ODBC_EXEC ou com ODBC_PREPARE e ODBC_EXECUTE

$dbhost = "koo2dzw5dy.database.windows.net";

$db = "SenaQuiz";

$user = "TSI";

$password = "SistemasInternet123";
$conninfo = "Driver={SQL Server};Server=$dbhost;Port=1433;Database=$db;";

if ($conn = odbc_connect($conninfo,$user,$password)) echo "conectado"; else echo "Faiф. :(";
echo "<br><br>";

$email = 'teste9999@teste.com';

$nome = 'nome';

// EXEC

$sql = "insert into professor (email, nome) values ('".$email."', '".$nome."')";

if($res = odbc_exec($conn, $sql)) echo 'Inserido com sucesso!'; else echo 'Erro na inserзгo!';


// Prepare - Execute

$sql = "insert into professor (email, nome) values (?,?)";

$stmt = odbc_prepare($conn, $sql);

$params = array($email,$nome);

if($res = odbc_execute($stmt, $params)) echo 'Inserido com sucesso!'; else echo 'Erro na inserзгo!';

//3 - Arquivos de Imagens

//Gravar imagem sem usar base64. Exibir usando base64.

//4 - set_time_limit para mudar o limite de 30 segundos de execuзгo de uma pбgina.

//5 - Imagem carregando parcialmente

//Limite do tamanho de dados da biblioteca OBDC configurada no PHP.INI. Alterar o parвmetro odbc.defaultlrl

//6 - Paginaзгo: TOP e OFFSET em SQLServer?

?>