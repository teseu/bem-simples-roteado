<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
?>
<div class="alert alert-success">
	Dados enviados com <strong>Sucesso!</strong> Veja abaixo os dados que você enviou.
</div>
<div class="panel panel-default" style="margin-top: 20px;">
	<div class="panel-heading">
	  <h3 class="panel-title">Dados</h3>
	</div>
	<div class="panel-body">
	  Nome: <?php echo "$nome <br />"; ?>
	  E-mail: <?php echo "$email <br />"; ?>
	  Assunto: <?php echo "$assunto <br />"; ?>
	  Mensagem: <?php echo "$mensagem <br />"; ?>

	</div>
</div>