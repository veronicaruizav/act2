<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM producto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $marca = $row['marca'];
    $codigo = $row['codigo'];
    $color = $row['color'];
    $categoria = $row['categoria'];
    $calidad = $row['calidad'];
    $precio = $row['precio'];
 
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $marca = $_POST['marca'];
  $codigo = $_POST['codigo'];
  $color = $_POST['color'];
  $categoria = $_POST['categoria'];
  $calidad = $row['calidad'];
  $precio = $_POST['precio'];


  $query = "UPDATE producto set nombre = '$nombre', marca = '$marca',  codigo = '$codigo', color = '$color',  categoria = '$categoria', calidad = '$calidad',  precio = '$precio' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update nombre">
        </div>

          <div class="form-group">
          <input name="marca" type="text" class="form-control" value="<?php echo $marca; ?>" placeholder="Update marca">
        </div>

        <div class="form-group">
          <input name="codigo" type="text" class="form-control" value="<?php echo $codigo; ?>" placeholder="Update codigo">
        </div>

        <div class="form-group">
          <input name="color" type="text" class="form-control" value="<?php echo $color; ?>" placeholder="Update color">
        </div>

        <div class="form-group">
          <input name="categoria" type="text" class="form-control" value="<?php echo $categoria; ?>" placeholder="Update categoria">
        </div>
        <div class="form-group">
          <input name="calidad" type="text" class="form-control" value="<?php echo $calidad; ?>" placeholder="Update calidad">
        </div>

        <div class="form-group">
          <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Update precio">
        </div>

        
        <button  class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>