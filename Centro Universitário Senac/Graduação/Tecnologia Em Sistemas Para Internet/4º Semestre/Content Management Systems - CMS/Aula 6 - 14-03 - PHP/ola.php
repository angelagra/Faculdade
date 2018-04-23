<?php

	

	class Usuario{

		var $login; //variaveis publicas
		var $senha;
		var $nome;

		public function __construct(){
			echo"O metodo construtor foi executado!\n";
		} 

		public function espera($tempo = 10){
			sleep($tempo);
		} 

		public function __destruct(){
			echo"O metodo destrutor foi executado\n";
		}
	}

?>