<?php

  function verfica() {
      $endereco = $_SERVER['REQUEST_URI'];
      $rotas = array(
        'contato',
        'confirma',
        'inicio',
        'inicio2',
        'empresa',
        'produtos',
        'servicos',
        'resultado',
        'detalhe',
        'admin',
        'adpaginas',
        'adprodutos',
        'edpaginas',
        'edprodutos',
        'respaginas',
        'resprodutos',
        'login',
        'logout',
        'entrar'
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

