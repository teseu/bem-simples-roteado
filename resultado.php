<div class="navbar navbar-default">
    <h2>Resultado</h2>

</div>
<?php

    require_once("cria.php");
    require_once("conexao.php");
    require_once("banco.php");
    $busca = $_REQUEST['busca'];
    $sql_produtos = "Select * from produtos where nomeproduto LIKE '%$busca%' AND descproduto LIKE '%$busca%'";
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
           <h4>R$ 230,00 <span style="font-size: 11px;">ou 10X de R$ 23,00</span></h4>
           <p><a href="#" class="btn btn-info"><i class="icon-shopping-cart icon-white"></i> Comprar</a> <a href="#" class="btn">Ver Detalhes &rarr;</a></p>
         </div>
       </div>
     </div>');
    }
    ?>
</div>