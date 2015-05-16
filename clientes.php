    <?php
    require_once(__DIR__.'/Cliente.php');
    require_once(__DIR__.'/ClientePF.php');
    require_once(__DIR__.'/ClientePJ.php');
    require_once(__DIR__.'/ClienteInterface.php');
    require_once(__DIR__.'/arrayClientesPF.php');
    require_once(__DIR__.'/arrayClientesPJ.php');

    $clientes = array_merge($clientespf, $clientespj);

    if(isset($_POST['sort'])){
        $sort = $_POST['sort'];
    }
    else {
        $sort = 1;
    }
    if ($sort == 1) {
        sort($clientes);
        $sort = 2;
    }
    else {
        rsort($clientes);
        $sort = 1;
    }

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
                         <th>Endereço de cobrança</th>
                         <th>Tipo</th>
                         <th>Rank</th>
                       </tr>
                     </thead>
                     <tbody>";

    for ($c = 0; $c <= 12; $c++) {


        $num = $c + 1;
        echo "<tr>
                <td>$num</td>
                <td><form method='post' action='detalheclientes'>
                  <input type='hidden' id='id' name='id' value='";
        print_r($clientes[$c]->getId());

        echo"' >
                  <button type='submit' class='btn btn-link'> ";
        print_r($clientes[$c]->getNome());
        echo"
        </button> </td>
                <td>";
        print_r($clientes[$c]->getId());
        echo" </td>
                <td><input type='text' class='form-control' name='endereco' value='";
        print_r($clientes[$c]->getEnderecoCobranca());
        echo"'> </td>
                <td>";
                    if($clientes[$c]->getTipo() == '1'){ echo 'Pessoa Física';} else { echo 'Pessoa Jurídica';}
                    echo "</td>
                        <td><div>
                        <span class='starRating'>
        <input id='";
        print_r($clientes[$c]->getEmail());         echo"5' type='radio'
        name='cliente[$num]' value='5'>
        <label for='";
        print_r($clientes[$c]->getEmail());         echo"5'></label>
        <input id='";
        print_r($clientes[$c]->getEmail());         echo"4' type='radio'
        name='cliente[$num]' value='4'>
        <label for='";
        print_r($clientes[$c]->getEmail());         echo"4'></label>
        <input id='";
        print_r($clientes[$c]->getEmail());         echo"3' type='radio'
        name='cliente[$num]' value='3'>
        <label for='";
        print_r($clientes[$c]->getEmail());         echo"3'></label>
        <input id='";
        print_r($clientes[$c]->getEmail());         echo"2' type='radio'
        name='cliente[$num]' value='2'>
        <label for='";
        print_r($clientes[$c]->getEmail());         echo"2'></label>
        <input id='";
        print_r($clientes[$c]->getEmail());         echo"1' type='radio'
        name='cliente[$num]' value='1'>
        <label for='";
        print_r($clientes[$c]->getEmail());         echo"1'></label>
      </span></div></form>
 </td>
                </tr>";
    }
    ?>
         </tbody>
      </table>
    </div>
  </div>
</div>

<input type="text" class="form-control" name="endereco" value="">