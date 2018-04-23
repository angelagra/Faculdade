<?php

	session_start();

	$marcas = array('BMW' => 20, 'AUDI' => 15, 'FERRARI' => 6, 'PAJERO' => 12, 'HB20' => 45);

	foreach ($marcas as $tipoMarca => $value) {
		
			$marca = 0;
			if($marca <= $value){
				
				echo "&nbsp<a href=?tipo=" .$tipoMarca. ">$tipoMarca</a>&nbsp &nbsp &nbsp";
			}


	}



?>