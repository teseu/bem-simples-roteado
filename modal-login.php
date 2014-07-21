<?php session_start(); ?>
<?php include("login.php") ?>

<form action="index.php" method="post">
<div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Faça login para editar</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-6"><input class="col-md-12 form-control" type="text" placeholder="Login" name="login_p"></div>
          <div class="col-md-6"><input class="col-md-12 form-control" type="password" placeholder="Senha" name="senha_p"></div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default" value="Enviar">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        </div>
      </div><!-- final do modal-content -->
    </div><!-- final do modal-dialog -->
    </div>
 </form>