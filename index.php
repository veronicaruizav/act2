<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveTask.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
          </div>
          
          <div class="form-group">
            <input type="text" name="marca" class="form-control" placeholder="marca" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="codigo" class="form-control" placeholder="codigo" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="color" class="form-control" placeholder="color" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="categoria" class="form-control" placeholder="categoria" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="calidad" class="form-control" placeholder="calidad" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="precio" class="form-control" placeholder="precio" autofocus>
          </div>

         
          <input type="submit" name="saveTask" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Codigo</th>
            <th>Color</th>
            <th>Categoria</th>
            <th>calidad</th>
            <th>Precio</th>
            
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['calidad']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>