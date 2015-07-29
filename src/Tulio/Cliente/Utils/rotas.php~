<?php

  function verfica() {
      $endereco = $_SERVER['REQUEST_URI'];
  
      $rotas = array(
    'inicio',
    'clientes',
    'detalheclientes'
       );

      foreach ($rotas as $url) {
	  ///bem-simples-roteado-refatorar/?inicio inicio
	  //echo $endereco."  ".$url;exit;
          if ($endereco == '/') {
              return require_once('src/Tulio/View/inicio.php');
          }else if($endereco == '/inicio'){
			  return require_once('src/Tulio/View/inicio.php');
		  } 
		  else {
				 
              if ($endereco == '/' . $url) {
                  return require_once('src/Tulio/Cliente/' . $url . '.php');
              }
          }
      }
      header('HTTP/1.0 404 Not Found');
      return require_once("src/Tulio/View/404.php");
  };
verfica();

?>

