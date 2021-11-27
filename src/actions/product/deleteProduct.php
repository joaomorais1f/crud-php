<?php
  require '../cruds/product.php';
  $productExists = getProductById($_GET['id']);
  if ($productExists) {
    $deletedProduct = deletetProductById($_GET['id']);
    echo "<h1 style='text-align: center; font-size: 32px;'> $deletedProduct </h1>";
    header("refresh: 1; ../../../index.php");
  } else {
    echo "<h1 style='text-align: center; font-size: 32px;'> Produto não encontrado </h1>";
    header("refresh: 1; ../../../index.php");
  }

?>