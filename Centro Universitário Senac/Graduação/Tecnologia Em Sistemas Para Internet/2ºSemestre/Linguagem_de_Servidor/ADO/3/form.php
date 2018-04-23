<?php

	session_start();


	echo "<br><h4>ESTADO</h4>";
	if(!isset($_SESSION['estado'])){
		$estado = $_POST['estado'];
		echo "O Estado é : $estado";
	}
	

	echo "<hr>";

	echo "<br><h4>FRUTA</h4>";
	if (!isset($_SESSION['opcao'])) {
		$opcao = $_POST['opcao'];
		echo "A fruta é : $opcao";
		
	}

	echo "<hr>";

	echo "<br><h4>TEXTO</h4>";
	if(!isset($_SESSION['textarea'])){
		$text = $_POST['textarea'];
		echo "O Texto é : $text";
	}
	

	
	



?>