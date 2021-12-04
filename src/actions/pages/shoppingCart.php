<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/styles/main.css">
  <title> CRUD - Shop Cart </title>
</head>
<body>
  <?php 

    require '../cruds/product.php';
    if (!isset($_SESSION['shoppingCart'])) {
      $_SESSION['shoppingCart'] = array();
    }
    
    $total = 0;
    $alt = false;

    if (!empty($_GET)) {
      for ($i = 0; $i < count($_SESSION['shoppingCart']); $i++) {
        if ($_SESSION['shoppingCart'][$i]['idProduct'] == $_GET['id']) {
          $alt = true;
          $_SESSION['shoppingCart'][$i]['quantity']++;
        }
      }

      if (!$alt) {
        $product["idProduct"] = $_GET['id'];
        $product['quantity'] = 1;
        $_SESSION['shoppingCart'][] = $product;
      }
    }
    

  ?>
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
  <section class="product shop-cart">
    <?php 
    if (isset($_SESSION['shoppingCart'])) {
      for ($PurchasedProducts = 0; $PurchasedProducts < count($_SESSION['shoppingCart']); $PurchasedProducts++)  { 
        $allPurchasedProducts = getProductById($_SESSION['shoppingCart'][$PurchasedProducts]['idProduct']);
        if (isset($allPurchasedProducts)) {
          $allPurchasedProducts['quantity'] = $_SESSION['shoppingCart'][$PurchasedProducts]['quantity'];
          $total = $total + ($allPurchasedProducts['quantity'] * $allPurchasedProducts['productPrice']);
        } else {
          unset($_SESSION['shoppingCart']);
          session_destroy();
        }
      // echo $total;
    ?>
    <?php if (!empty($allPurchasedProducts) && isset($_SESSION['shoppingCart'])) : ?>
    <div class="card">
      <img src="../../<?=$allPurchasedProducts['productImage']?>" alt="<?=$allPurchasedProducts['productName']?>">
      <header>
        <h2> <?=$allPurchasedProducts['productName']?></h2>
      </header>
      <div class="card-content">
        <h3> Categoria: <span> <?=$allPurchasedProducts['productCategory'] ?> </span> </h3>
        <h3> Preço: <span> R$ <?=$allPurchasedProducts['productPrice'] ?> </span> </h3>
        <h3> Quantidade <span> <?=$allPurchasedProducts['quantity'] ?> </span> </h3>
      </div>
    </div>
    <?php endif; } } ?>
  </section>
  <?php if (!empty($_SESSION['shoppingCart'])) : ?>
  <footer class="shop-cart-total">
      <h4> Total da compra <span> R$ <?=$total?> </span> </h4>
  </footer>
  <?php endif; ?>
</body>
</html>