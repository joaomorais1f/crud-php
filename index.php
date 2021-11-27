<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/assets/styles/main.css">
  <title> Home </title>
</head>
<body>
  <?php 
    require './src/actions/cruds/product.php';
    $products = getAllProducts();
  ?>
  <nav class="navbar">
    <a href="./index.php" class="navbar-brand"> Logo </a>
    <ul class="navbar-nav">
      <?php session_start(); if (!isset($_SESSION['user'])) : ?>
      <li class="nav-item">
        <a href="./src/actions/pages/register.php" class="nav-link"> Criar Conta </a>
      </li>
      <li class="nav-item">
        <a href="./src/actions/pages/login.php" class="nav-link"> Entrar </a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a href="./src/actions/pages/product.php" class="nav-link"> Produto </a>
      </li>
      <li class="nav-item">
        <a href="./src/actions/user/logOut.php" class="nav-link"> Sair </a>
      </li>
      <?php endif; ?>
    </ul>
  </nav>
  <section class="product">
    <?php if (!empty($products)) : 
      foreach ($products as $product) :  
    ?>
      <div class="card">
        <img class="img-fluid" src="./src<?=$product['productImage']?>" alt="<?=$product['productName']?>"/>
        <header>
          <h2> <?=$product['productName']?></h2>
        </header>
        <div class="card-content">
          <h3> Categoria: <?=$product['productCategory'] ?> </h3>
        </div>
        <?php 
          if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['idUser'] == $product['idUser']) {
           
        ?>
        <footer>
          <a class="btn view" href="./src/actions/product/viewProduct.php?id=<?=$product['idProduct']?>"> Visualizar Produto </a>
          <a class="btn edit" href="./src/actions/product/editProduct.php?id=<?=$product['idProduct']?>"> Editar Produto </a>
          <a class="btn delete" href="./src/actions/product/deleteProduct.php?id=<?=$product['idProduct']?>"> Deletar Produto </a>
        </footer>
      </div>
    <?php } } endforeach; endif; ?> 
  </section>
</body>
</html>