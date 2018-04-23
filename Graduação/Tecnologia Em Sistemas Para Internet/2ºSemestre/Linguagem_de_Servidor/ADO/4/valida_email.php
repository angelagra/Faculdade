<?php
function valida_email($email){

	if(!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)){
	 echo "E-mail inválido.";    
	}else{
	 echo "Seu e-mail é ".$email;
	}
}

?>