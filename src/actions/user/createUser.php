<?php
  session_start();
  require '../cruds/user.php';
  
  if (!empty($_POST)) {
    extract($_POST);
    $usuario = createNewUser($name, $email, $password);
    if ($usuario) {
      $_SESSION['user'] = loginUserByEmailPassword($email, $password);
      header("location: ../../../index.php");
    }
  } else {
    header("../pages/register.php");
  }
?>