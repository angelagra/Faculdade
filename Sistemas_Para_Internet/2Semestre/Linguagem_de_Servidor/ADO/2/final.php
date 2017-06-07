<?php
session_start();
include 'parametros.php';

$usuario = $_SESSION['usuario'];
$escolheu = $_SESSION['escolheu'];
$tipo = $_SESSION['tipo'];

echo "<hr>";
echo "$usuario<br>";
echo "Você escolheu: <b>$escolheu do tipo $tipo</b>";

?>
<br>
<br>
<a href = "sair.php"> Sair </a>