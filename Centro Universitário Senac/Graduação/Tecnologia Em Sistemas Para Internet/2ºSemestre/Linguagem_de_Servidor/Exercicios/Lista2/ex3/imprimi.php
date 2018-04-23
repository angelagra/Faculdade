<?php

	session_start();

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];

	echo "A Sequencia é: <br>";
	
	while ($numero1 <= $numero2) {
		echo "$numero1<br>";

		$numero1++;
	}
?>
