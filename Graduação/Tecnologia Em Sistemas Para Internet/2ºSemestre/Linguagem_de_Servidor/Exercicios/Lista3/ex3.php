<?php

	function MenorNumero($vetor){
		foreach ($vetor as  $value) {
			
			if(isset($aux)){ //enquanto for nula recebe o primeiro valor do array
				$aux = $value;
			}
			else($value < $aux){
				$aux = $value;
			}
		}

		return $aux;
	}


	$menor = array(80, 20, 12, 32, 60);
	echo "O menor numero é: " .MenorNumero($menor);

?>