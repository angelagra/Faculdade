
<html>


	<?php

		if(isset($_FILES['imagem'])){

			$extensao = strtolower(substr($_FILES['imagem'], -4));
			$novo_nome = md5(time()) .$extensao;
			$diretorio = "Lista9/";

			move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio.$novo_nome);

			$sql_code = "INSERT INTO imagem(arquivo) VALUES ($novo_nome)";


		}

	?>

	<form action="ex11.php" method="post" enctype="multipart/form-data">

		<input type="file" required="coloque imagem aqui" name="imagem">
		<input type="submit" value="salvar">
		
	</form>
</html>