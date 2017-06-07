<?php

	$marcas = array('BMW' => 0, 'AUDI' => 1, 'FERRARI' => 2, 'PAJERO' => 3, 'HB20' => 4);

	$marca = 0;

	foreach ($marcas as $key => $value){
		
		if($marca <= $value){
			$tipo = $key;
			echo "&nbsp<a href=?tipo=" .$tipo. ">$tipo</a>&nbsp &nbsp &nbsp";
		}
		
	}
	
?>