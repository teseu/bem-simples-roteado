<?php session_start(); ?>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="inicio">Trilha PHP</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <?php $url = $_SERVER['REQUEST_URI']; ?>
        <li <?php if($url == '/inicio'){ echo "class='active'";} ?>><a href="inicio">Início</a></li>
        <li <?php if($url == '/empresa'){echo "class='active'";} ?>><a href="empresa">Empresa</a></li>
        <li <?php if($url == '/produtos'){echo "class='active'";} ?>><a href="produtos">Produtos</a></li>
        <li <?php if($url == '/servicos'){echo "class='active'";} ?>><a href="servicos">Serviços</a></li>
        <li <?php if($url == '/contato'){echo "class='active'";} ?>><a href="contato">Contato</a></li>
          <?php if($_SESSION['login']): ?>
        <li <?php if($url == '/admin'){echo "class='active'";} ?>><a href="admin">Administração</a></li>
          <?php endif; ?>
      </ul>
        <?php if(!$_SESSION['login']): ?>
            <div class="text-right" id="modal-login" style="margin-top: 10px;">
                <a href="entrar" role="button" class="btn btn-primary">Login</a>
            </div>
        <?php else: ?>
            <div class="text-right" id="modal-login" style="margin-top: 10px;">
                <a href="logout" role="button" class="btn btn-warning">Logout</a>
            </div>
        <?php endif; ?>
    </div>

  </div>
</div>