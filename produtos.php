<div class="navbar navbar-default">
     <div class="nav navbar-nav">
        <h2>Produtos</h2>
     </div>
    <form class="navbar-search pull-right" action="resultado" method="post" enctype="multipart/form-data">
       <input type="text" class="form-control" placeholder="Buscar Produtos" name="busca">

     </form>
</div>
<?php

require_once("cria.php");
require_once("conexao.php");
    require_once("banco.php");
    $sql_produtos = "Select * from produtos";
    $cns_produtos = $conexao->prepare($sql_produtos);
    $cns_produtos->execute();

    $produtos = $cns_produtos->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row">
    <?php
    foreach($produtos as $produto){
        echo('<div class="col-md-4">
       <div class="thumbnail">
         <img alt="imagem" src=img/'.$produto['imgproduto'].'>
         <div class="caption">
           <h3>'.$produto['nomeproduto'].'</h3>
           <p>'.$produto['descproduto'].' </p>
           <h4>'.$produto['preco'].' <span style="font-size: 11px;">ou '.$produto['condicao'].'</span></h4>
           <p><a href="#" class="btn btn-info"><i class="icon-shopping-cart icon-white"></i> Comprar</a> <a href="#" class="btn">Ver Detalhes &rarr;</a></p>
         </div>
       </div>
     </div>');
    }
    ?>
</div>