<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/styles/main.css">
  <title> CRUD - Produto </title>
</head>
<body>
  <?php
    require '../cruds/product.php';
    $productExists = getProductById($_GET['id']);
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
  <section class="container">
    <header>
      <h2> Editar produto </h2>
    </header>
    <form action="./updateProduct.php" method="post" enctype="multipart/form-data">
      <fieldset class="input-group">
        <label for="name"> Nome  </label>
        <input type="text" name="name" id="name" value="<?php if (isset($productExists)) { echo $productExists['productName']; } else { echo ""; } ?>" placeholder="Nome do Produto">
      </fieldset>
      <fieldset class="input-group">
        <label for="price"> Preço </label>
        <input type="number" name="price" id="price" value="<?php if (isset($productExists)) { echo $productExists['productPrice']; } else { echo ""; } ?>" placeholder="Preço do Produto">
      </fieldset>
      <fieldset class="input-group" style="display: none;">
        <label for="id"> Id do Produto </label>
        <input type="text" name="id" id="id" value="<?php if (isset($productExists)) { echo $productExists['idProduct']; } else { echo ""; } ?>" placeholder="Preço do Produto">
      </fieldset>
      <fieldset class="input-group">
        <label for="category"> Categoria do Produto </label>
        <input list="categories" name="category" id="category" value="<?php if (isset($productExists)) { echo $productExists['productCategory']; } else { echo ""; } ?>" placeholder="Escreva ou selecione a categoria">
        <datalist id="categories">
          <option value="Informática"> </option>
          <option value="Eletrodoméstico"> </option>  
          <option value="Cozinha"> </option> 
        </datalist>
      </fieldset>
      <fieldset class="input-group">
        <label for="image"> Selecione uma imagem </label>
        <input type="file" name="image" id="image" placeholder="Preço do Produto" required>
      </fieldset>
      <fieldset class="input-group">
        <button type="submit">
          Editar Produto
        </button>
      </fieldset>
    </form>
  </section>
</body>
</html>