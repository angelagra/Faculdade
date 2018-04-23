<?php

	
	class BancoDeDados extends mysqli // classe banco de dados herda da mysqli
	{
		
		function __construct($host,$user,$password,$db_name)
		{
			parent::__construct($host,$user,$password,$db_name);
		}
	}

?>