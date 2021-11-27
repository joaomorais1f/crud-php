<?php
  session_start();
  require '../cruds/user.php';

  if (!empty($_POST)) {
    extract($_POST);
    $_SESSION['user'] = loginUserByEmailPassword($email, $password);
    if ($_SESSION['user']) {
      header("location: ../../../index.php");
    } else {
      header("location: ../pages/login.php");
    }
  } else {
    header("refresh: 0.2; location: ../pages/login.php");
  }
?>