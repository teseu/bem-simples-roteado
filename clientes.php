<?php session_start(); ?>
<?php if($_SESSION['login']): ?>

    <?php
    require_once('cliente.php');

    $clientes = array( array("Alberto Luis", 98745632102 , 'QNL 05 Casa 34', '3456-9876', 'alberto@email.com'),
        array("Carlos Caetano", 98745632102 , 'QE 09 Conjunto A Casa 34', '35683467', 'caetano@email.com'),
        array("Virgínia Almeida", 98745632102 , 'SQS 214 Bloco A Apartamento 305', '42173245', 'virgina@email.com'),
        array("Tadeu Oscar", 98745632102 , 'SQSW 301 Bloco G Apartamento 201', '23341043', 'tadeu@email.com'),
        array("Frederico João", 98745632102 , 'SHIS QI 05 Conjunto 03 Casa 05', '23460984', 'fred@email.com'),
        array("Davi Miranda", 98745632102 , 'SQN 314 Bloco A Apartamento 406', '33479823', 'davi@email.com'),
        array("Felipe Augusto", 98745632102 , 'CLN 412 Bloco B Apartamento 101', '33479023', 'felipe@email.com'),
        array("Helena Renata", 98745632102 , 'Condominio Mansões Entrelagos Quadra 2 Conjunto K Casa 23', '34087631', 'helena@email.com'),
        array("Natália Farias", 98745632102 , 'SHIN QL 08 Coinjunto 01 Casa 03', '3368-9029', 'natalia@email.com'),
        array("Susana Rafael", 98745632102 , 'Quadra 3 Conjunto G Casa 35', '4509-2134', 'susana@email.com')
    );


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
                              <input type='hidden' id='sort' name='sort' value='$sort' >
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
                  <input type='hidden' id='sort' name='sort' value='$sort' >
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

<?php else: header("location: entrar"); ?>

<?php endif; ?>