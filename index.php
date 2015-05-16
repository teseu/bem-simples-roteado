<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Trilha PHP :: Site simples </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/estilo.css" rel="stylesheet" media="screen">
    <link href="css/rating.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>

    <![endif]-->

  </head>

  <body>

  	<?php require_once("cabecalho.php"); ?>

  	<div class="container theme-showcase" role="main">
         <?php require_once("rotas.php"); ?>
	</div>
  	<?php require_once("rodape.php"); ?>	

   
  <!-- Arquivos Javascripts
    ================================================== -->

    <script src="js/jquery-1.10.2.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

   
  </body>
</html>
