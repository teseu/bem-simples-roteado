<?php
session_start();
$id = $_REQUEST['id'];

    require_once("conexao.php");
    $sql_produtos = "Select * from produtos where idproduto = :id;";
    $cns_produtos = $conexao->prepare($sql_produtos);
    $cns_produtos->bindValue("id", $id);
    $cns_produtos->execute();
//<label class="col-sm-2 control-label">Email</label><p class="form-control-static">email@example.com</p>
    $produto = $cns_produtos->fetch(PDO::FETCH_ASSOC);
?>
<div class="row">
	<div class="col-md-8">
        <h3><?php echo($produto['nomeproduto']); ?></h3><br />
        <script src="/ckeditor/ckeditor.js"></script>
	  <form method="post" action="resprodutos" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo($produto['idproduto']); ?>">
		  <div class="row">
		    <div class="col-md-6"><input name="nome" class="form-control" type="text" value="<?php echo($produto['nomeproduto']); ?>"></div>
		    <div class="col-md-6"><input name="preco" class="form-control" type="text" value="<?php echo($produto['preco']); ?>"></div>
		  </div>
		  <div class="row" style="margin-top: 20px;">
		    <div class="col-md-12"><input name="condicao" class="col-md-8 form-control" type="text" value="<?php echo($produto['condicao']); ?>"></div>
		  </div>
		  <div class="row" style="margin-top: 20px;">
		  	<div class="col-md-12">
                <textarea name="descproduto" id="descproduto" class="col-md-8 form-control" cols="80" rows="4"><?php echo($produto['descproduto']); ?></textarea>
                <script>
                    CKEDITOR.replace( 'descproduto' );
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