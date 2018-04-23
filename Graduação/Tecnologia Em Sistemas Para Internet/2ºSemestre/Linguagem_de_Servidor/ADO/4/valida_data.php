<?php
function valida_data($data){

	if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
	 echo "A Data inválida.";
	}else{
		echo "A Data é Valida";
	}
}
 
?>