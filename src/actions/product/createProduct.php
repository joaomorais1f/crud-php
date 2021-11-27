<?php
  session_start();  
  require '../cruds/product.php';
  if (!empty($_POST))  {
    if (!empty($_FILES)) {
      extract($_POST);
      $imagem_tmp = $_FILES["image"]["tmp_name"];
      $imagem = basename($_FILES["image"]["name"]);
      $diretorio_mover = "/assets/images/products/";
      $diretorio = "/assets/images/products/";
    
      move_uploaded_file($imagem_tmp, $diretorio_mover. $imagem);
      $product_image = $diretorio. $imagem;
  
      $product = addNewProduct($name, $price, $category, $product_image, $_SESSION['user']['idUser']);
      if ($product) {
        header("location: ../../../index.php");
      } else {
        header("location: ../pages/product.php");
      }
    } else {
      header("location: ../pages/product.php");
    }
  } else {
    header("location: ../pages/product.php");
  }
?>