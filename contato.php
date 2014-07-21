<div class="row">
	<div class="col-md-8">
	  <?php
        require_once("conexao.php");
        $sql = "Select * from paginas where nomepagina = 'contato'";
        $cns = $conexao->prepare($sql);
        $cns->execute();

        $conteudo = $cns->fetch(PDO::FETCH_ASSOC);

        echo('<h3>'.$conteudo['titulopagina'].'</h3> <br /><h4>'.$conteudo['conteudopagina'].'</h3>');

    ?>
        <script src="/ckeditor/ckeditor.js"></script>
	  <form method="post" action="confirma" enctype="multipart/form-data">
		  <div class="row">
		    <div class="col-md-6"><input name="nome" class="form-control" type="text" placeholder="Nome"></div>
		    <div class="col-md-6"><input name="email" class="form-control" type="text" placeholder="E-mail"></div>
		  </div>
		  <div class="row" style="margin-top: 20px;">
		    <div class="col-md-12"><input name="assunto" class="col-md-8 form-control" type="text" placeholder="Assunto"></div>
		  </div>
		  <div class="row" style="margin-top: 20px;">
		  	<div class="col-md-12">
                <textarea name="mensagem" id="mensagem" class="col-md-8 form-control" placeholder="Escreva sua Mensagem" cols="80" rows="4"></textarea>
                <script>
                    CKEDITOR.replace( 'mensagem' );
                </script>
            </div>

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