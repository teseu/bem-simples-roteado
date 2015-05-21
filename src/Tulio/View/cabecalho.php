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
        <li <?php if($url == '/clientes'){echo "class='active'";} ?>><a href="clientes">Clientes</a></li>
      </ul>
    </div>

  </div>
</div>