<?php session_start();  ?>
<?php if($_SESSION['login']):
$id = $_POST['id'];
$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

    require_once("conexao.php");
    $sql_paginas = "update paginas set nomepagina=:nome, titulopagina=:titulo, conteudopagina=:conteudo where idpagina = :id;";
    $cns_paginas = $conexao->prepare($sql_paginas);
    $cns_paginas->bindValue("id", $id);
    $cns_paginas->bindValue("nome", $nome);
    $cns_paginas->bindValue("titulo", $titulo);
    $cns_paginas->bindValue("conteudo", $conteudo);
    $cns_paginas->execute();

?>
<div class='alert alert-success alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  				A página foi atualizada com sucesso! Veja a <a href='adpaginas' class='alert-link'>lista</a>
</div>
<?php else: header("location: entrar"); ?>

<?php endif; ?>