<?php

	function MaiorNumero($vetor){

		$aux = 0;

		foreach ($vetor as $value) {
		
			if($value > $aux){
				$aux = $value;
			}
		}

		return $aux;
	}


	$maior = array(12, 20, 80, 32, 60);
	echo "O maior numero é: " .MaiorNumero($maior);


?>