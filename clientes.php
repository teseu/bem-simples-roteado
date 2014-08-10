    <?php
    require_once('cliente.php');


    $sort = $_POST['sort'];
    if ($sort == 1) {
        ksort($clientes);
        $sort = 2;
    }
    else {
        krsort($clientes);
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
                         <th>CPF</th>
                         <th>E-mail</th>
                       </tr>
                     </thead>
                     <tbody>";
    $i =1;
    foreach ($clientes as $cliente ) {
        $num = $i++;
        echo "<tr>
                <td>$num</td>
                <td><form method='post' action='detalheclientes'>
                  <input type='hidden' id='cpf' name='cpf' value='$cliente[1]' >
                  <button type='submit' class='btn btn-link'> $cliente[0]</button> </form></td>
                <td>$cliente[1]</td>
                <td>$cliente[4]</td>
                </tr>";
    }
    ?>
         </tbody>
      </table>
    </div>
  </div>
</div>
