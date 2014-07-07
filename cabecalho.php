<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Trilha PHP</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if(!isset($_GET['page'])){ echo "class='active'";} ?>><a href="inicio">Início</a></li>
        <li><a href="#empresa">Empresa</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#servicos">Serviços</a></li>
        <li <?php if($_GET['page'] == 'contato'){echo "class='active'";} ?>><a href="contato">Contato</a></li>
      </ul>
    </div>
  </div>
</div>