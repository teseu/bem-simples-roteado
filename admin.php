<?php session_start(); ?>
<?php if($_SESSION['login']): ?>
<div>
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Administração do Site simples em PHP - Trilha PHP</h3>
  </div>
  <div class="panel-body list-group">

      <h3><a href="adpaginas" class="btn btn-default btn-lg btn-block">Administrar páginas</a></h3>
      <h3><a href="adprodutos" class="btn btn-default btn-lg btn-block">Administrar produtos</a></h3>
      <h3><a href="clientes" class="btn btn-default btn-lg btn-block">Administrar clientes</a></h3>

  </div>
</div>
<?php else: header("location: entrar"); ?>

<?php endif; ?>