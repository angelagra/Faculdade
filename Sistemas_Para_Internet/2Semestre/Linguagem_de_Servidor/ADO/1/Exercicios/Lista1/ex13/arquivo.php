<?php

	session_start();

	echo "<h4> ITEM A</h4>";
	
		$campo = $_POST['CAMPO1'];
		echo "O valor do campo é : $campo";
	

	echo "<hr><br>";

	echo "<h4>ITEM B</h4>";

	//if (!isset($_SESSION['CAMPO1']) && (!isset($_SESSION['CAMPO2']))){

		$campo1 = $_POST['CAMPO1'];
		$campo2 = $_POST['CAMPO2'];

		for ($num=0; $num < $campo2 ; $num++) { 
				echo "$campo1";
		}
	//}

	echo "<hr>";

	
?>