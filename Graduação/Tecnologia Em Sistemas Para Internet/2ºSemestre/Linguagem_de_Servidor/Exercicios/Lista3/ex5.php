<?php

 	function teste($a,$b){

 		global $aux;

 		$aux = $a * $b;

 		return $aux;
 	}

 	$a = 2;
 	$b = 3;
 	$aux = 1;

 	echo $aux; echo "<br>";
 	echo teste($a,$b); echo "<br>";

 	echo $aux; echo "<br>";
 	echo teste($b, $a); echo "<br>";

 	//R1: sera exibido 1 6 6 6 porque a variavel $aux se tornou global podendo ser usada tanto na função como no codigo.

?>