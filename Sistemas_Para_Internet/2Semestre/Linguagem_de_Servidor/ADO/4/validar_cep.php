
<?php

function validar_cep($cep, $opcao){
 
 
	if(preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)){

		return true;
	}else{

		return false;
	}
}
 

?>