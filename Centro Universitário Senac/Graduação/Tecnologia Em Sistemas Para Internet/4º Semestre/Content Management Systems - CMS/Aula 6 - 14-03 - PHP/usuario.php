<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('ola.php');
require('bancoDeDados.php');

$objBanco = new bancoDeDados('127.0.0.1', 'root', '123456', 'magento');
$query = $objBanco->query('SELECT * FROM i1admin_user'); 

/*AQUI*/
while($registro = $objResult->fetch_assoc()){
	var_dump($registro);
	echo "<br></br>";
}

echo "<pre>";

ob_start();

$objUsuario = new Usuario; // transforma a classe usuario em objeto

ob_flush();
flush();

$objUsuario->espera(5);

unset($objUsuario);

echo "Agora é que vai parar de rodar meu script\n";

?>