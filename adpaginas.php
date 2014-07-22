<?php session_start(); ?>
<?php if($_SESSION['login']): ?>
<div class="navbar navbar-default">
     <div class="nav navbar-nav">
        <h2>Páginas</h2>
     </div>
</div>
<?php

 require_once("conexao.php");

    $sql_paginas = "Select * from paginas";
    $cns_paginas = $conexao->prepare($sql_paginas);
    $cns_paginas->execute();

    $paginas = $cns_paginas->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="panel panel-default">
  <div class="panel-heading">Páginas</div>
  <table class="table">
      <thead>
<tr>
<th>Nº</th>
<th>Nome</th>
<th>Título</th>
<th>Conteúdo</th>
</tr>
</thead>
<tbody>
    <?php
    $i = 1;
    foreach($paginas as $pagina){
        $num = $i++;
        echo('<tr>
                <td>'.$num.'</td>
                <td><form method="post" action="edpaginas">
                  <input type="hidden" id="id" name="id" value="'.$pagina['idpagina'].'" >
                  <button type="submit" class="btn btn-link">'.$pagina['nomepagina'].'</button> </form></td>
                  <td>'.$pagina['titulopagina'].'</td>
                <td>'.$pagina['conteudopagina'].'</td>
            </tr>');
    }
    ?>
        <tr>
        <tr>
        </tbody>
  </table>
  </div>
</div>
<?php else: header("location: entrar"); ?>

<?php endif; ?>