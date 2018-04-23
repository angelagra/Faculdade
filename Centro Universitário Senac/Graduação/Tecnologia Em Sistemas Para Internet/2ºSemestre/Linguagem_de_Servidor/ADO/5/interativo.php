
<?php
	//Angela Ferreira - Sistemas para Internet
	echo "Interativo<br><br>";
	for ($i=2; $i < 1000; $i++) { 
		$num = $i;
		$j = 0;
		while ($num != 1) {
		
			if($num%2 == 0) {
				$num = $num/2;
			}
			elseif ($num%2 != 0) {
				$num = $num*3 + 1;
			}
			$j++;
		}
		$arr[$i] = $j;
		echo " $i = " .$arr[$i]. "<br><br>";
	}

?>