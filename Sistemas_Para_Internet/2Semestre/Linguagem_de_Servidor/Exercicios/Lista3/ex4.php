<?php
	// O QUE SERÁ EXIBIDO NO CODIGO?

	function teste($a, $b){

		$aux = $a * $b;

		return $aux;
	}

	$a = 2;
	$b = 3;

	echo teste(5,6);echo "<br>";
	echo teste($a,2);echo "<br>";
	echo teste($b,$a);echo "<br>";
	echo teste($b,$aux);echo "<br>";


//R: O echo teste($b,$aux) não vai funcionar porque a variavel $aux não existe no campo fora da função 
?>