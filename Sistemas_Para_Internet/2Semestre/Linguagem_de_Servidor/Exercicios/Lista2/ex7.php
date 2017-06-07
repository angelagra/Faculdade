<?php

session_start();

$usuario = '';

if (!isset($_SESSION['usuario'])) {   

   if (isset($_POST['usuario'])) $usuario = $_POST['usuario'];

   if (isset($_POST['senha'])) $senha = $_POST['senha'];
   if ($usuario == 'oie' && $senha == 'correto')  {

       echo 'Login Valido';

       $_SESSION['usuario']   = 'oie';   

   } else echo 'Login Invalido';

}

/*
a) Explique pra que serve o código  $_SESSION['usuario']   = 'oie'; 
	R: usuario valido recebe texto "oie"

b) Explique pra que serve o código  if (!isset($_SESSION['usuario']))
	R: se o usuario não for nulo
*/

?>