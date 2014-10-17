<?php

  function verfica() {
      $endereco = $_SERVER['REQUEST_URI'];
      $rotas = array(
    'inicio',
    'clientes',
    'detalheclientes'
       );

      foreach ($rotas as $url) {
          if ($endereco == '/') {
              return require_once('inicio.php');
          } else {
              if ($endereco == '/' . $url) {
                  return require_once($url . '.php');
              }
          }
      }
      header('HTTP/1.0 404 Not Found');
      return require_once("404.php");
  };
verfica();

?>

