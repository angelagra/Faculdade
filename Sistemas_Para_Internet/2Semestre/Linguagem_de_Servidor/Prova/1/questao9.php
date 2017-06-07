<?php

	$letra = $_GET['letra_mes'];

	$meses =  array('A' => 'Janeiro', 'B' => 'Fevereiro', 'C' => 'Marco', 'D' => 'Abril', 'E' => 'Maio', 'F' => 'Junho', 'G' => 'Julho', 'H' => 'Agosto', 'I' => 'Setembro', 'J' => 'Outubro', 'K' => 'Novembro', 'L' => 'Dezembro');

	foreach ($meses as $key => $value) {
		
		if ($letra == $key) {
			echo "$value";
		}
	}

?>