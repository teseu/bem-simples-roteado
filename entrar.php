<?php session_start(); ?>
<?php /*include("login.php") */?>
    <div class="container">
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/bootstrap-s.css" rel="stylesheet">
      <form class="form-signin" action="login" method="post">
        <h2>Efetue seu login</h2>
        <input class="form-control" name="login" placeholder="Login" required="" autofocus="" type="text">
        <input class="form-control" name="senha" placeholder="Senha" required="" type="password">
        <label class="checkbox">
          <input value="remember-me" type="checkbox"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div>