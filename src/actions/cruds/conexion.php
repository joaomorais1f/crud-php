<?php
  function conexion() {
    $conexion = mysqli_connect("localhost", "root", "", "CRUD");
    if (!$conexion) {
      die("falha na conexão" .mysqli_connect_error());
    }

    return $conexion;
  }

?>