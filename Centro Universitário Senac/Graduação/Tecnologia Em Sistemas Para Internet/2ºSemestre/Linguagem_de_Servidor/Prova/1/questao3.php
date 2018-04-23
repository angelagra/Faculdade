<?php
 $i = 200;

 do{
	if($i%11 == 0 && $i%13 ==0){
		echo "$i é multiplo de 11 e 13<br>";
		continue;
	}
	
	if($i%11 == 0){
		echo "$i é multiplo de 11<br>";
	}

	if($i%13 == 0){
		echo "$i é multiplo de 13<br>";
	}

	$i++;
}while ($i <= 250);



?>