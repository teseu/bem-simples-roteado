<?php session_start(); ?>
<?php if($_SESSION['login']): ?>

    <?php
    require_once('cliente.php');

    $cpf = $_POST['cpf'];
    foreach($clientes as $cliente){
        if($cliente[1] == $cpf) {
            $nome = $cliente[0];
            $endereco = $cliente[2];
            $telefone = $cliente[3];
            $email = $cliente[4];
        }
    }
    echo('<div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">'.$nome.'</h2>
              </div>
              <div class="panel-body">

                  <h5><strong>CPF: </strong>'.$cpf.'</h5>
                  <h5><strong>Endereço: </strong>'.$endereco.'</h5>
                  <h5><strong>Telefone: </strong>'.$telefone.'</h5>
                  <h5><strong>E-mail: </strong>'.$email.'</h5>

              </div>');

    ?>
<?php else: header("location: entrar"); ?>

<?php endif; ?>