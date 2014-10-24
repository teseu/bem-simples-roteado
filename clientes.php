    <?php
    require_once(__DIR__.'/Cliente.php');
    require_once(__DIR__.'/ClientePF.php');
    require_once(__DIR__.'/ClientePJ.php');
    require_once(__DIR__.'/arrayClientesPF.php');

    $clientes = array_merge($clientespf, $clientespj);

    if(isset($_POST['sort'])){
        $sort = $_POST['sort'];
    }
    else {
        $sort = 1;
    }
    if ($sort == 1) {
        ksort($clientes);
        $sort = 2;
    }
    else {
        krsort($clientes);
        $sort = 1;
    }
    print_r($clientespf);
    print_r($clientespf[0]->getNome());
    echo "<div class='row'>
             <div class='col-md-12'>
               <div class='panel panel-default'>
                 <div class='panel-heading'><h4>Clientes</h4>
                </div>
                  <table class='table'>
                    <thead>
                       <tr>
                         <th>#</th>
                         <th>  <form method='post' action='clientes'>
                              <input type='hidden' id='sort' name='sort' value='$sort'>
                              <button type='submit' class='btn btn-link'> Nome</button> </form> </th>
                         <th>CPF/CNPJ</th>
                         <th>E-mail</th>
                         <th>Tipo</th>
                       </tr>
                     </thead>
                     <tbody>";
    $i = 1;
    foreach ($clientespf as $chave => $cliente ) {
        $num = $i++;
        echo "<tr>
                <td>$num</td>
                <td><form method='post' action='detalheclientes'>
                  <input type='hidden' id='id' name='id' value='$cliente->getCpf()' >
                  <button type='submit' class='btn btn-link'> $cliente->getNome()</button> </form></td>
                <td>$cliente->getCpf()</td>
                <td>$cliente->getEmail()</td>
                <td>";
                    if($cliente->getTipo() == '1'){ echo 'Pessoa Física';} else { echo 'Pessoa Jurídica';}
                    echo "</td>
                </tr>";
    }
    ?>
         </tbody>
      </table>
    </div>
  </div>
</div>

