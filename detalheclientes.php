    <?php
    require_once('ClientePF.php');
    require_once('ClientePJ.php');

    $clientes = array_merge($clientespf, $clientespj);

    $id = $_POST['id'];
    foreach($clientes as $cliente){
        if($cliente[1] == $id) {
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

                  <h5><strong>CPF/CNPJ: </strong>'.$id.'</h5>
                  <h5><strong>Endereço: </strong>'.$endereco.'</h5>
                  <h5><strong>Telefone: </strong>'.$telefone.'</h5>
                  <h5><strong>E-mail: </strong>'.$email.'</h5>

              </div>');

    ?>
