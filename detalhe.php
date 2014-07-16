<div class="navbar navbar-default">
    <?php

    require_once("cria.php");
    require_once("conexao.php");
    require_once("banco.php");
    $id = $_REQUEST['id'];
    $sql_produto = "Select * from produtos where idproduto = :id";

    $cns_produto = $conexao->prepare($sql_produto);
    $cns_produto->bindValue("id", $id);
    $cns_produto->execute();

    $produto = $cns_produto->fetch(PDO::FETCH_ASSOC);
    ?>
    <h2>Detalhe - <?php  echo($produto['nomeproduto']);  ?></h2>

</div>

<div class="row">
    <?php

        echo('<div class="col-md-10">
       <div class="thumbnail col-md-4">
         <img alt="imagem" src=img/'.$produto['imgproduto'].'>
       </div>
       <div class="col-md-6">
         <div class="caption">
           <h3>'.$produto['nomeproduto'].'</h3>
           <p>'.$produto['descproduto'].' </p>
           <h4>'.$produto['preco'].' <span style="font-size: 11px;">ou '.$produto['condicao'].'</span></h4>
           <p><a href="#" class="btn btn-info pull-right"><i class="icon-shopping-cart icon-white"></i> Comprar</a></p>
         </div>
       </div>
     </div>');

    ?>
</div>