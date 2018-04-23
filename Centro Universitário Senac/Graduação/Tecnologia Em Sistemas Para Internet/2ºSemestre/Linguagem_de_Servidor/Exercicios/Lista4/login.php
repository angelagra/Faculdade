<?php
  session_start();

  include ('index.php');

  if($db = odbc_connect($dsn, $user, $password)){

    if(odbc_exec($db, "INSERT INTO Usuario
            (loginUsuario,
            senhaUsuario,
            nomeUsuario,
            tipoPerfil,
            usuarioAtivo) 
          VALUES 
            ('luiz@gmail.com',
            '123456',
            'Luiz Fernando',
            'A',
            1)")){
    echo "Usu&aacute;rio cadastrado com sucesso";
  }




?>