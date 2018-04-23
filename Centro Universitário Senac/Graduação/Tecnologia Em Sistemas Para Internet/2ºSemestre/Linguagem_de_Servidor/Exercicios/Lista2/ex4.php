<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
</head>
<body>

	<?php

		$veiculos =  array("BMW" => 15, "Mercedes" => 42, "Audi" => 70);

		$marca = '';
		$mais = 0;

		foreach ($veiculos as $m => $v) {
			if($v > $mais){
				$mais = $v;
				$marca = $m;
			}
		}

		echo 'A marca '.$marca.' vendeu '.$mais.' veiculos.';
	?>

</body>
</html>