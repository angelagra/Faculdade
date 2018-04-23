<?php

	$filename = $_POST['imagem'];

	echo $filename . ":" . filesize($filename) . "kb" "";

		


?>


<html>

	<form action="ex13.php" method="post" enctype="multipart/form-data">

		Arquivo: <input type="text" name="imagem">
		<input type="submit" value="Enviar">
		
	</form>


</html>