    <?php
    require_once(__DIR__ . '/Cliente.php');
    require_once(__DIR__ . '/Clientepf.php');
    require_once(__DIR__ . '/ClientePJ.php');
    require_once(__DIR__ . '/arrayclientespf.php');
    require_once(__DIR__ . '/arrayClientesPJ.php');

    $clientes = array_merge($clientespf, $clientespj);

    $id = $_POST['id'];

    foreach($clientes as $cliente){
        if($cliente->getId() === $id) {
            $clienteSelecionado = $cliente;
            break;
        }
    }

    $clienteSelecionado->setEnderecoCobranca($_POST['endereco']);
    $clienteSelecionado->setRank($_POST['c'.$id]);

    echo('<div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">'.$clienteSelecionado->getNome().'</h2>
              </div>
              <div class="panel-body">

                  <h5><strong>CPF/CNPJ: </strong>'.$clienteSelecionado->getId().'</h5>
                  <h5><strong>Endereço: </strong>'.$clienteSelecionado->getEndereco().'</h5>
                  <h5><strong>Telefone: </strong>'.$clienteSelecionado->getTelefone().'</h5>
                  <h5><strong>E-mail: </strong>'.$clienteSelecionado->getEmail().'</h5>
                  <h5><strong>Endereço de cobrança: </strong>'.$clienteSelecionado->getEnderecoCobranca().'</h5>
                  <h5><strong>Rank: </strong>'.$clienteSelecionado->getRank().'</h5>
              </div>');

    ?>

