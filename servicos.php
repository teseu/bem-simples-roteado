<div class="jumbotron">
    <?php
        if ($banco == 0){

            require_once("cria.php");
            require_once("conexao.php");
            require_once("banco.php");
            $banco = 1;
            echo("mudei o banco");
        } else {
            require_once("conexao.php");
        }
        $sql = "Select * from paginas where nomepagina = 'servicos'";
        $cns = $conexao->prepare($sql);
        $cns->execute();

        $conteudo = $cns->fetch(PDO::FETCH_ASSOC);

        echo($conteudo['conteudopagina']);

    ?>
</div>