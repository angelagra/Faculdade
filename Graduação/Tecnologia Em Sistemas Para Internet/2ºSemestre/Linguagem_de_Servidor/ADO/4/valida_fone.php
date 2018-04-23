<?php

function valida_fone($telefone){
	if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $telefone)){
	 echo "O Telefone Inváildo.";
	}else{
		echo "O Telefone é Valido";
	}
}

?>