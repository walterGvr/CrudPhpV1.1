<?php

  include ("Conexion.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tb_rol WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result){
      die("Query failed");
    }
    $_SESSION['message']= 'Rol Removido';
    $_SESSION['message_type']= 'danger';
    header("Location: Index.php");
  }
?>
