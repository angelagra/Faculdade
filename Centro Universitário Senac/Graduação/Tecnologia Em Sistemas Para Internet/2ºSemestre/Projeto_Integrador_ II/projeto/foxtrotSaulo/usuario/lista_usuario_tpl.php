<?php
  include ('../menu/index.head.tpl.php');
?>
  <link rel="stylesheet" href="../estilo/tabela.css">
<?php
  include ('../menu/index.body.tpl.php');
?>
  <section>
      <h1>Listagem de Usuário</h1>
  </section>

  <!-- Gerando uma tabela com as informações sobre Categorias do Banco -->
  <div class="container-table">
    <div class="table">
      <div class="row header">
        <div class="cell-categoria"><p> ID Usuario </p></div>
        <div class="cell-categoria"><p> Login </p></div>
        <div class="cell-categoria"><p> Nome </p></div>
        <div class="cell-categoria"><p> Perfil </p></div>
        <div class="cell-categoria"><p> Ativo </p></div>
        <div class="cell-categoria"></div>
        <div class="cell-categoria"></div>
      </div>
    <?php
    foreach ($usuarios as $usuario) {
      echo "
            <div class='row'>
              <div class='cell-categoria'><p>{$usuario['idUsuario']}</p></div>
              <div class='cell-categoria'><p>{$usuario['loginUsuario']}</p></div>
              <div class='cell-categoria'><p>{$usuario['nomeUsuario']}</p></div>
              <div class='cell-categoria'><p>{$usuario['tipoPerfil']}</p></div>
              <div class='cell-categoria'><p>{$usuario['usuarioAtivo']}</p></div>
              <div class='cell-categoria'><a href='?acao=editar&id={$usuario['idUsuario']}'>Editar</a></div>
              <div class='cell-categoria'><a href='?acao=apagar&id={$usuario['idUsuario']}'>Apagar</a></div>
            </div>
           ";
         }
    ?>
    </div> <!-- Fim table -->
  </div> <!-- Fim container-table -->

<?php
  include ('../menu/index.head.tpl.php');
?>
