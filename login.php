<?php session_start(); ?>
<?php
require_once('conexao.php');

$login = (isset($_POST['login'])) ? $_POST['login'] : '';
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';

if (isset($_POST['login'])) {
    $sql = "Select * from usuarios where login =:login ";
    $cns = $conexao->prepare($sql);
    $cns->bindValue("login", $login);

    $cns->execute();

    $logon = $cns->fetch(PDO::FETCH_ASSOC);
if (password_verify($logon['senha'], 'admin')) {
    echo('deu certo');
}

if (password_verify($senha, $logon['senha'])) {
    $_SESSION['login'] = $logon['login'];
    $_SESSION['usuario'] = $logon['nomeusuario'];

    ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Bem-vindo <strong><?php echo($_SESSION['usuario']); ?>!</strong> O login foi efetuado com sucesso no sistema.
    </div>
<?php
}
else {
	unset ($_SESSION['login']);
	unset ($_SESSION['usuario']);
    echo($logon['senha']);
     print_r($logon);
    if (password_verify($logon['senha'], 'admin')) {
    echo('deu certo');
}

	echo ('<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Atenção!</strong> O login falhou, tente novamente ou procure o administrador do sistema.
    </div>');
}
}