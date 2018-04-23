<?php
	session_start();

	require 'veiculos.php';

	$marca = '';
	$Qveiculos = 0;

	foreach ($veiculos as $nomeMarca => $quantidade) {
		
			if ($quantidade > $Qveiculos) {
				$Qveiculos = $quantidade;
				$marca = $nomeMarca;
			}
	}

	echo 'A Marca ' .$marca. ' Vendeu '.$Qveiculos. ' veiculos';



//O include ele inclui e avalia o arquivo, pode incluir varias vezes
// O require pede que o arquivo seja necessario execultar, se não existir o programa para.

?>