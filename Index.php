<?php include ("Conexion.php")?>

<?php include ("includes/head.php") ?>

    <div class="container p-4">

      <div class="row">

        <div class="col-md-4">
<!--mensaje de guradado-->
          <?php if(isset($_SESSION['message'])){?>
              <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show"
                role="alert">
              <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <?php session_unset(); } ?>

          <div class="card card-body">

            <form action="Guardar.php" method="POST">

              <div class="form-group">

                <input type="text" name="rol" class="form-control"  placeholder="Rol" autofocus>
              </div>

              <input type="submit" class="btn btn-success btn-block"
              name="guardar" value="guardar Rol">
            </form>

          </div>

        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Rol</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query= "SELECT * FROM tb_rol";
                  $result = mysqli_query($conn, $query);

                  while ($row= mysqli_fetch_array($result)){?>
                    <tr>
                      <td><?php echo $row['rol'] ?></td>
                      <td>
                        <a href="Editar.php?id=<?php echo $row['id']?> " class="btn btn-secondary">
                          <i class="fas fa-marker"></i>
                        </a>
                        <a href="Eliminar.php?id=<?php echo $row['id']?> "class="btn btn-danger">
                          <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                <?php  }?>
              </tbody>
            </table>
        </div>

      </div>

    </div>
<?php include 'includes/footer.php'; ?>
