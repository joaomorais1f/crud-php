<?php
  require 'conexion.php';

  function addNewProduct($productName, $productPrice, $productCategory, $productDirectory, $userId) {
    $sql = "INSERT INTO Product (productName, productPrice, productCategory, productImage, idUser)
    VALUES ('$productName', '$productPrice', '$productCategory', '$productDirectory', '$userId')";
    $output = mysqli_query($conexion = conexion(), $sql);
    if (!$output) {
      die ('erro ao adicionar um novo produto'. mysqli_error($conexion));
    }

    return "Produto adicionado com sucesso";
  }

  function getAllProducts() {
    $sql = "SELECT * FROM Product";
    $output = mysqli_query(conexion(), $sql);
    $products = array();
    while ($row = mysqli_fetch_assoc($output)) {
      $products[] = $row;
    }

    return $products;
  }

  function getProductById($idProduct) {
    $sql = "SELECT * FROM Product WHERE idProduct = '$idProduct'";
    $output = mysqli_query(conexion(), $sql);
    $product = mysqli_fetch_assoc($output);
    return $product;
  }

  function deletetProductById($idProduct) {
    $sql = "DELETE FROM Product WHERE idProduct = '$idProduct'";
    $output = mysqli_query(conexion(), $sql);
    if (!$output) {
      return "Ocorreu um erro ao deletar o produto". mysqli_error($conexion = conexion(), $sql);
    }

    return "Produto deletado com sucesso";
  }

  function updateProductById($productName, $productPrice, $productCategory, $productDirectory, $idProduct) {
    $sql = "UPDATE Product SET productName = '$productName', productPrice = '$productPrice', productCategory = '$productCategory', productImage = '$productDirectory' WHERE idProduct = '$idProduct'";
    $output = mysqli_query(conexion(), $sql);
    if (!$output) {
      return "Ocorreu um erro ao editar o produto". mysqli_error($conexion = conexion(), $sql);
    }

    return "Produto editado com sucesso";
  } 
  
?>