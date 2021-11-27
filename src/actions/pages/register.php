<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/styles/main.css">
  <title> CRUD - Criar Conta </title>
</head>
<body>
  <nav class="navbar">
    <a href="../../../index.php" class="navbar-brand"> Logo </a>
    <ul class="navbar-nav">
      <?php if (isset($register)) : ?>
      <li class="nav-item">
        <a href="../pages/register.php" class="nav-link"> Criar Conta </a>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <a href="../pages/login.php" class="nav-link"> Entrar </a>
      </li>
    </ul>
  </nav>
  <section class="container">
    <header>
      <h2> Criar conta </h2>
    </header>
    <form action="../user/createUser.php" method="post">
      <fieldset class="input-group">
        <label for="name"> Nome  </label>
        <input type="text" name="name" id="name" placeholder="Nome Completo">
      </fieldset>
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
          Criar conta
        </button>
      </fieldset>
    </form>
  </section>
</body>
</html>