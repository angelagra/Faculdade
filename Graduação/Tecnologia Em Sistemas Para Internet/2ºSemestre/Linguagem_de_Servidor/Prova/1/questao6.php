<?php

	$animais =  array('cavalo' => 0, 'camelo' => 1, 'cachorro' => 2, 'gato' => 3, 'porco' => 4);

	$animal = 'abelha';

	foreach ($animais as $key => $value) {
		
		if($animal == $key){
			echo "O Animal $animal exite na posição $value";
		}
	}

			echo "O Animal não exite";
		
?>