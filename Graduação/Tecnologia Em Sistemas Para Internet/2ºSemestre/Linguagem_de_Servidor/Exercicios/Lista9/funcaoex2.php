<?php

	
/*
function foo(&$var){
    $var++;
}

$a=5;
foo($a);
// $a é 6 aqui

echo $a;
*/

	function ref(&$var, $v1= 10, $v2=5){

		$resto = $v1 % $v2;
		$var = $resto; 
		echo $var;
	}
?>