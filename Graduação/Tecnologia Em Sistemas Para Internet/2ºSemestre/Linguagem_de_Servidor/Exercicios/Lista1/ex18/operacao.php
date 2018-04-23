<html>
<?php

	session_start();

	$op1 = $_POST['operando1'];
	$op2 = $_POST['operando2'];
	$operador = $_POST['operador'];

	echo "<h3> RESULTADO </h3>";

	switch ($operador) {
		case 'soma':
			$result = $op1 + $op2;
			echo "O Resultado de $op1 + $op2 = " .$result;
			break;
		
		case 'subtracao':
				$result = $op1 - $op2;
				echo "O Resultado de $op1 - $op2 = " .$result;
			break;

		case 'divisao':
				$result = $op1 / $op2;
				echo "O Resultado de $op1 / $op2 = " .$result;
			break;

		case 'multiplicacao':
				$result = $op1 * $op2;
				echo "O Resultado de $op1 * $op2 = " .$result;
			break;
	}

	echo "<br><br>";
	echo "<hr>";
	echo "<br><br><br>";

?>

<h3>O que Deseja Fazer?</h3>
	&nbsp &nbsp <a href = "ex18.php">Voltar </a> &nbsp &nbsp
	&nbsp &nbsp <a href = "sair.php">Sair</a> &nbsp &nbsp
</html>