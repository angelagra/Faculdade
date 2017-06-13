<?php

	$b = 1;
	$a = 2;

	function ex(){

		$$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
	}

	ex();
	echo $b;
	echo $a;

?>