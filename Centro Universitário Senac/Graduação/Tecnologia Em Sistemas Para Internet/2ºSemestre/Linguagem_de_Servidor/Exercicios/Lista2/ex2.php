<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 2</title>
</head>
<body>

	<?php
	
		$num1 = $_GET["a"];
		$num2 = $_GET["b"];

		while($num1 < $num2){

			if($num1%2 != 0){
				echo "$num1<br>";
			}

			$num1++;
		}
	?>
</body>
</html>