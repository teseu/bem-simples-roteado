<?php session_start(); ?>
<div class="navbar navbar-default">
     <div class="nav navbar-nav">
        <h2>Produtos</h2>
     </div>
    <form class="navbar-search pull-right" action="resultado" method="post" enctype="multipart/form-data">
       <input type="text" class="form-control" placeholder="Buscar Produtos" name="busca">

     </form>
</div>
<?php

 require_once("conexao.php");

    $sql_produtos = "Select * from produtos";
    $cns_produtos = $conexao->prepare($sql_produtos);
    $cns_produtos->execute();

    $produtos = $cns_produtos->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="panel panel-default">
  <div class="panel-heading">Produtos</div>
  <table class="table">
      <thead>
<tr>
<th>Nº</th>
<th>Imagem</th>
<th>Nome</th>
<th>Descrição</th>
</tr>
</thead>
<tbody>
    <?php
    $i = 1;
    foreach($produtos as $produto){
        $num = $i++;
        echo('<tr>
                <td>'.$num.'</td>
                <td><img alt="imagem" src=img/'.$produto['imgprodutoii'].'></td>
                <td><form method="post" action="edprodutos">
                  <input type="hidden" id="id" name="id" value="'.$produto['idproduto'].'" >
                  <button type="submit" class="btn btn-link">'.$produto['nomeproduto'].'</button> </form></td>
                <td>'.$produto['descproduto'].'</td>
            </tr>');
    }
    ?>
        <tr>
        <tr>
        </tbody>
  </table>
  </div>
</div>