<?php

include("Conexion.php");

  if(isset($_POST['guardar'])){
    $rol = $_POST['rol'];


    $query =  "INSERT INTO tb_rol (rol) VALUES ('$rol')";
    $result = mysqli_query($conn, $query)or die(mysqli_error($conn)) ;
    if (!$result) {
      die("Query failed");
    }

    $_SESSION['message']='Rol Almacenado';
    $_SESSION['message_type']='success';

    header("location: index.php");
  }
?>
