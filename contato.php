<div class="row">
	<div class="col-md-8">
	  <?php
        if ($banco == 0){

            require_once("cria.php");
            require_once("conexao.php");
            require_once("banco.php");
            $banco = 1;
        } else {
            require_once("conexao.php");
        }
        $sql = "Select * from paginas where nomepagina = 'contato'";
        $cns = $conexao->prepare($sql);
        $cns->execute();

        $conteudo = $cns->fetch(PDO::FETCH_ASSOC);

        echo($conteudo['conteudopagina']);

    ?>
	  <form method="post" action="confirma" enctype="multipart/form-data">
		  <div class="row">
		    <div class="col-md-6"><input name="nome" class="form-control" type="text" placeholder="Nome"></div>
		    <div class="col-md-6"><input name="email" class="form-control" type="text" placeholder="E-mail"></div>
		  </div>
		  <div class="row" style="margin-top: 20px;">
		    <div class="col-md-12"><input name="assunto" class="col-md-8 form-control" type="text" placeholder="Assunto"></div>
		  </div>
		  <div class="row" style="margin-top: 20px;">
		  	<div class="col-md-12"><textarea name="mensagem" class="col-md-8 form-control" placeholder="Escreva sua Mensagem" rows="4"></textarea></div>
		  </div>
		  <div class="text-right" style="margin-top: 20px;">
		    <button type="submit" class="btn btn-primary ">Enviar</button>
		    <a href="inicio">
		    	<button type="button" class="btn btn-default ">Cancelar</button>
		    </a>
		  </div>
	  </form>
	</div>
</div>