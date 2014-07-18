		

		  <div class="jumbotron">
		    <h1>Site simples em PHP</h1>
		    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		    <p><a href="#" class="btn btn-primary btn-large">Saiba mais &raquo;</a></p>
		  </div>
		  <div class="row">
		  	<div class="col-md-4">
			  	<div class="panel panel-primary">
			  		<div class="panel-heading">
		              <h3 class="panel-title">Conteúdo em destaque</h3>
		            </div>
		            <div class="panel-body">
		              Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
		              <p><a href="#" class="btn btn-default"> Confira &raquo;</a></p>
		            </div>
			  	</div>
		  	</div>
		  	<div class="col-md-4">
			  	<div class="panel panel-primary">
			  		<div class="panel-heading">
		              <h3 class="panel-title">Conteúdo em destaque</h3>
		            </div>
		            <div class="panel-body">
		              Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
		              <p><a href="#" class="btn btn-default"> Confira &raquo;</a></p>
		            </div>
			  	</div>
		  	</div>
		  	<div class="col-md-4">
			  	<div class="panel panel-primary">
			  		<div class="panel-heading">
		              <h3 class="panel-title">Conteúdo em destaque</h3>
		            </div>
		            <div class="panel-body">
		              Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
		              <p><a href="#" class="btn btn-default"> Confira &raquo;</a></p>
		            </div>
			  	</div>
		  	</div>
		  </div>
		 <br /><br />

<?php
    require_once("conexao.php");
    $sql = "DROP DATABASE IF EXISTS `pdo`";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $banco = 0;
?>

