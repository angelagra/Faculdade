<html>
<?php
	include 'parametros.php';

	session_start();

	$usuario = $_SESSION['usuario'];
	$escolheu = $_SESSION['escolheu'];

	
	echo '<h4> Ola voce escolheu '.$escolheu.'</h4><br>';
	echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbspEscolha o tipo <br>";


	if($escolheu == 'Flores'){
		foreach ($flores as $value) {
			$tipo = $value;
			echo "&nbsp<a href=?tipo=" .$tipo. ">$tipo</a>&nbsp &nbsp &nbsp";
		}
	}


	if($escolheu == 'Animais'){
		foreach ($animais as $value) {
			$tipo = $value;
			echo "<a href=?tipo=" .$tipo. ">$tipo</a>&nbsp &nbsp &nbsp";
		}
	}


	if (isset($_GET['tipo'])) {
		$prox = $_SESSION['tipo'] = $_GET['tipo'];
	} 

	if (isset($_GET['tipo']) && $_GET['tipo'] == $prox) {
		 header('Location: final.php');
	} 
	
?>
</html>