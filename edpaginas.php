<?php session_start(); ?>
<?php if($_SESSION['login']):
$id = $_REQUEST['id'];

    require_once("conexao.php");
    $sql_paginas = "Select * from paginas where idpagina = :id;";
    $cns_paginas = $conexao->prepare($sql_paginas);
    $cns_paginas->bindValue("id", $id);
    $cns_paginas->execute();

    $pagina = $cns_paginas->fetch(PDO::FETCH_ASSOC);
?>
<div class="row">
	<div class="col-md-8">
        <h3><?php echo($pagina['nomepagina']); ?></h3><br />
        <script src="/ckeditor/ckeditor.js"></script>
	  <form method="post" action="respaginas" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo($pagina['idpagina']); ?>">
		  <div class="row">
		    <div class="col-md-6"><input name="nome" class="form-control" type="text" value="<?php echo($pagina['nomepagina']); ?>"></div>
		    <div class="col-md-6"><input name="titulo" class="form-control" type="text" value="<?php echo($pagina['titulopagina']); ?>"></div>
		  </div>

		  <div class="row" style="margin-top: 20px;">
		  	<div class="col-md-12">
                <textarea name="conteudo" id="conteudo" class="col-md-8 form-control" cols="80" rows="4"><?php echo($pagina['conteudopagina']); ?></textarea>
                <script>
                    CKEDITOR.replace( 'conteudo' );
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
<?php else: header("location: entrar"); ?>

<?php endif; ?>