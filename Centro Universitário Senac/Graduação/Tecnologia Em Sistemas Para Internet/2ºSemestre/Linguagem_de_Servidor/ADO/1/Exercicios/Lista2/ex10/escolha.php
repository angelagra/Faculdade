<?php

	include 'ex10.php';
	session_start();

	$valor = $_SESSION['value'];


	echo "Você escolheu: <b>$valor</b>";

?>