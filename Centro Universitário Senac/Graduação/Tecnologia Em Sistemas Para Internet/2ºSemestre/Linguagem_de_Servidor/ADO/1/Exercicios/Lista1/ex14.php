<?php

	$valor1 = $_GET['valor1'];
	$valor2 = $_GET['valor2'];

	echo "<h4>ITEM A</h4>";
	if($valor1 < 2){
		echo "$valor1 é menor que 2<br>";
	}

	if($valor1 > 2){
		echo "$valor1 é maior que 2 <br>";
	}

	else{
		echo "$valor1 é igual a 2 <br>";
	}
	echo "<hr>";

?>
