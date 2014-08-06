<?php session_start(); ?>
<footer>
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="inicio2">Trilha PHP</a>
    </div>
    <div class="navbar-collapse collapse">
  		
      	<span class="navbar-text">Todos os direitos reservados &copy; - <?php echo date("Y"); ?></span>
  		<?php if($_SESSION['login']): ?>
        <span class="navbar-text navbar-right">Logado como <a href="#" class="navbar-link"><strong><?php echo($_SESSION['usuario']); ?></strong> </a></span>
        <?php else: ?>
        <span class="navbar-text navbar-right">Não está logado</span>
        <?php endif; ?>
    </div>
  </div>
</div>
 
</footer>
