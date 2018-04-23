	
<?php

	//Angela Ferreira - Sistemas para Internet
	echo "<br><br>Recursivo<br>";
	function Collatz($num){
		
		if($num != 1){
			$GLOBALS['i']++;

			if ($num%2 == 0) {
				return Collatz($num/2);
			}

			else {
				return Collatz($num*3 + 1);
			}
		}
		
	}

	for ($j=2; $j < 1000; $j++) { 

		$i = 0;
		Collatz($j);
		$arr[$j] = $i;
		echo " $j = " .$arr[$j]. "<br>";
	}

?>