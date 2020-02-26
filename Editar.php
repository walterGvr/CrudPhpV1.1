<?php
include("Conexion.php");
$rol = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tb_rol WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $rol = $row['rol'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $rol= $_POST['rolU'];


  $query = "UPDATE tb_rol set rol='$rol' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Rol actualizado';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

?>
<?php include('includes/head.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="Editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">
              <input name="rolU" type="text" class="form-control" value="<?php echo $rol; ?>" placeholder="Actualizar rol">
            </div>
            <button class="btn btn-success" name="update">
              Actualizar
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
