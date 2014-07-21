<div class="jumbotron">
    <?php

    require_once("conexao.php");
    $sql = "Select * from paginas where nomepagina = 'empresa'";
    $cns = $conexao->prepare($sql);
    $cns->execute();

    $conteudo = $cns->fetch(PDO::FETCH_ASSOC);

    echo('<h3>'.$conteudo['titulopagina'].'</h3>');
    echo($conteudo['conteudopagina']);

    ?>
</div>