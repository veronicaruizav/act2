<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  $nombre = $_POST['nombre'];
  $marca = $_POST['marca'];
  $codigo = $_POST['codigo'];
  $color = $_POST['color'];
  $categoria = $_POST['categoria'];
  $calidad = $_POST['calidad'];
  $precio = $_POST['precio'];

  $query = "INSERT INTO producto(nombre, marca, codigo, color, categoria, calidad, precio) VALUES ('$nombre', '$marca','$codigo', '$color','$categoria', '$calidad','$precio')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>