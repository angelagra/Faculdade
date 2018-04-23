
<?php
	$cores = array('vermelho','azul','amarelo','preto','branco');

		//--------FOREACH
			$i = 0;
			foreach ($cores as $value) {

				if($i < 5){
					echo "<br>" .$value. '';
				}
			}
		

		/*---------FOR
		for($i = 0; $i < 5; $i++){
			echo '' .$cores[$i]. "<br>";
		}*/

		/*---------WHILE
		$i = 0;
		while ( $i < 5) {
			echo '' .$cores[$i]. "<br>";
			$i++;
		}*/

		/*------DO WHILE
		$i = 0;
		do{
			echo '' .$cores[$i]. "<br>";
			$i++;
		}while($i < 5);*/


?>