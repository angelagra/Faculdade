<?php

session_start();

include('validar_cpf.php');
include('validar_cep.php');
include('valida_data.php');
include('valida_email.php');
include('valida_fone.php');

echo "<hr><br>";
echo "<h3>-----------------------------------------CPF------------------------------------</h3>";
 
if ( validar_cpf($_POST['cpf'])) {
	echo "<h4>CPF é válido.</h4>";
} else {
	echo "<h4>CPF é Inválido.</h4>";
}

if(valida_comprimento_texto($_POST['cpf'], 11)){
	echo "<h4>O Tamanho está correto</h4>";
}else{
	echo "<h4>O Tamanho está incorreto</h4>";
}

echo "<h3>--------------------------------------CEP----------------------------------------</h3>";

$cep = $_POST['cep'];
$opcao = $_POST['opcao'];

switch ($opcao) {
	case 'zero':
	validar_cep($cep,$opcao);
		echo "<h4>$cep</h4>";
		break;
	
	case 'um':
		if ( validar_cep($cep,$opcao)) {
		echo "<h4>CEP é válido.</h4>";

	} else {
		echo "<h4>CEP é Inválido.</h4>";
	}
		break;
}


echo "<h3>--------------------------------------DATA----------------------------------------</h3>";

valida_data($_POST['data']);

echo "<h3>--------------------------------------E-MAIL-------------------------------------</h3>";

$email = $_POST['email'];

 valida_email($email);

echo "<h3>--------------------------------------Telefone-------------------------------------</h3>"; 

valida_fone($_POST['fone']);

?>