<?php

	session_start();

	$tipo1 = $_GET['tipo'];
	$preco1 = $_GET['preco'];
	$variavel = 120;

	if($tipo1 == 'mega' && $preco1 > 2){
		$preco1 = 120;
		echo " " .$preco1;
	}else {
		echo "certo";
	}


?>