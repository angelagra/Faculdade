<?php

$nome = isset($nome) ? $nome : '';

echo '<br><br> '.$nome.' <br><br> 
		<form method="post">
		    Código do Diploma: <input type="text" name="codigo"><br>
		    <input type="submit" value="Validar">
		</form>';

?>