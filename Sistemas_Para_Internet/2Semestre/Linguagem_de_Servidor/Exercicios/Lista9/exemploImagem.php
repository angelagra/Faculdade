
<?php
/*
$arquivo = "C:\\xampp\\htdocs\\LinguagemDeServidor\\Lista9\\Desert.jpg";

$imagem = fopen($arquivo, "r");

$conteudo = fread($imagem, filesize($arquivo));

header("Content-Type: image/jpeg");

echo $conteudo;
?>*/


	$arquivo = "C:\\xampp\\htdocs\\LinguagemDeServidor\\Lista9\\Desert.jpg";

	$imagem = fopen($arquivo, "r");

	$conteudo = fread($imagem, filesize($arquivo));
?>

<html>  
<head>     
	<title>Imagem</title>  
</head>  
<body>

	<?php

	$conteudo_base64 = base64_encode($conteudo);

	echo "<img src=\"data:image/jpeg;base64,".$conteudo_base64."\">";

	?>
</body>
</html>



