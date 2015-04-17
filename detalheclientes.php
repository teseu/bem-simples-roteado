    <?php
    require_once(__DIR__.'/Cliente.php');
    require_once(__DIR__.'/ClientePF.php');
    require_once(__DIR__.'/ClientePJ.php');
    require_once(__DIR__.'/arrayClientesPF.php');
    require_once(__DIR__.'/arrayClientesPJ.php');

    $clientes = array_merge($clientespf, $clientespj);

    $id = $_POST['id'];
 /*    for ($c = 0; $c <= 12; $c++) {
         $clienteid = $clientes[$c].[1];
        if($clientes[$c].[1] == $id) {
            $nome = $clientes[$c][0];
            $endereco = $clientes[$c][2];
            $telefone = $clientes[$c][3];
            $email = $clientes[$c][4];
        }
    }*/
     foreach($clientes as $cliente){
         $clienteid = $cliente[1];
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
