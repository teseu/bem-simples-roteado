<?php session_start();  ?>
<?php if($_SESSION['login']):
$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$condicao = $_POST['condicao'];
$descproduto = $_POST['descproduto'];

    require_once("conexao.php");
    $sql_produtos = "update produtos set nomeproduto=:nome, preco=:preco, condicao=:condicao, descproduto=:descproduto where idproduto = :id;";
    $cns_produtos = $conexao->prepare($sql_produtos);
    $cns_produtos->bindValue("id", $id);
    $cns_produtos->bindValue("nome", $nome);
    $cns_produtos->bindValue("preco", $preco);
    $cns_produtos->bindValue("condicao", $condicao);
    $cns_produtos->bindValue("descproduto", $descproduto);
    $cns_produtos->execute();

?>
<div class='alert alert-success alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  				O produto foi atualizado com sucesso! Veja a <a href='adprodutos' class='alert-link'>lista</a>
</div>
<?php else: header("location: entrar"); ?>

<?php endif; ?>