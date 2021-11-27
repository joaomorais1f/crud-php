<?php
  require 'conexion.php';

  function createNewUser($userName, $userEmail, $userPassword) {
    $sql = "INSERT INTO User (userName, userEmail, userPassword)
    VALUES ('$userName', '$userEmail', '$userPassword')";
    $output = mysqli_query($conexion = conexion(), $sql);
    if (!$output) {
      die("Ocorreu um erro ao adicionar um novo usuário". mysqli_error($conexion));
    }

    return "Usuário criado com sucesso";
  }

  function loginUserByEmailPassword($userEmail, $userPassword) {
    $sql = "SELECT * FROM User WHERE userEmail = '$userEmail' and userPassword = '$userPassword'";
    $output = mysqli_query($conexion = conexion(), $sql);
    $user = mysqli_fetch_assoc($output);
    return $user;
  }

?>