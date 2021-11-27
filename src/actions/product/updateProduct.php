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
  
      $product = updateProductById($name, $price, $category, $product_image, $id);
      if ($product) {
        header("location: ../../../index.php");
      } else {
        header("location: ./editProduct?=id'$id'");
      }
    } else {
      echo "Selecione uma imagem";
      header("refresh: 1.0; ../../../index.php");
    }
  } else {
    echo "Informe todos os dados";
    header("refresh: 1.0; ../../../index.php");
  }
?>