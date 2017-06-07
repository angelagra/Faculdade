<html>
<?php
	session_start();

	include 'parametros.php';

	

	if(!isset($_SESSION['usuario'])){
		if(isset($_POST['usuario']) && isset($_POST['senha'])) {
			$senha = $_POST['senha'];
			$usuario = $_POST['usuario'];

			foreach ($usuarios as $usu => $sen) {
				if (($usuario == $usu) && ($senha == $sen)) {
					$_SESSION['usuario'] = $usu;	
				}
			}
		}
	}
		echo "<hr>";
		if(!isset($_SESSION['usuario'])){
			header("Location: logando.php");
		}else{
			echo "<h4>Escolha uma das opções</h4>";
			echo '&nbsp &nbsp<a href="?escolha=1">Flores</a>&nbsp &nbsp &nbsp';
			echo '&nbsp &nbsp<a href="?escolha=2">Animais</a>&nbsp &nbsp';
		}

		if(isset($_GET['escolha']) && ($_GET['escolha']) == 1){
			$_SESSION['escolheu'] = 'Flores';
			header('Location: escolha.php');
		}

		if (isset($_GET['escolha']) && ($_GET['escolha']) == 2) {
			$_SESSION['escolheu'] = 'Animais';
			header('Location: escolha.php');
		} 
?>
	<br>
	<br>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href = "sair.php"> Sair </a>
	<hr>
	
	
	
</html>

