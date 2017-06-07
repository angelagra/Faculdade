<?php

	$arr = array('a' =>2 ,'b' => 8, 'c' => 42 );

	$var1 = $arr['a'] + $arr['c'];
	$var2 = $var1 + $var1;
	$var3 = $var2/ $arr['b'];

	echo "$var3";

?>