<?php

	$b = 1;

	function globalll($b){
		$b = 2;
		echo "$b";
	}

	globalll($b);
?>