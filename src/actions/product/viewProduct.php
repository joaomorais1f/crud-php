<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/styles/main.css">
  <title>CRUD - View Produt </title>
</head>
<body>
  <nav class="navbar">
    <a href="../../../index.php" class="navbar-brand"> Logo </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="../pages/product.php" class="nav-link"> Produto </a>
      </li>
      <li class="nav-item">
        <a href="../user/logOut.php" class="nav-link"> Sair </a>
      </li>
    </ul>
  </nav>
  <?php
    require '../cruds/product.php';
    $product = getProductById($_GET['id']);
    if (!$product) {
      echo "<h1> Produto não encontrado </h1>";
    } else {
  ?>
  <section class="product">
    <div class="card">
      <img class="img-fluid" src="../..<?=$product['productImage']?>" alt="<?=$product['productName']?>"/>
      <header>
        <h2> <?=$product['productName']?></h2>
      </header>
      <div class="card-content">
        <h3> Categoria: <?=$product['productCategory'] ?> </h3>
      </div>
      </div>
  </section>
  <?php  } ?>
</body>
</html>