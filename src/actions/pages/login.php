<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/styles/main.css">
  <title> CRUD - Entrar </title>
</head>
<body>
  <nav class="navbar">
    <a href="../../../index.php" class="navbar-brand"> Logo </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="./register.php" class="nav-link"> Criar Conta </a>
      </li>
      <?php if (isset($login)) : ?>
      <li class="nav-item">
        <a href="./login.php" class="nav-link"> Entrar </a>
      </li>
      <?php endif; ?>
    </ul>
  </nav>
  <section class="container">
    <header>
      <h2> Entrar </h2>
    </header>

    <form action="../user/logIn.php" method="post">
      <fieldset class="input-group">
        <label for="senha"> E-mail </label>
        <input type="email" name="email" id="email" placeholder="Informe um e-mail">
      </fieldset>
      <fieldset class="input-group">
        <label for="password"> Senha </label>
        <input type="password" name="password" id="password" placeholder="Informe uma senha">
      </fieldset>
      <fieldset class="input-group">
        <button type="submit">
          Confirmar
        </button>
      </fieldset>
    </form>
  </section>
</body>
</html>