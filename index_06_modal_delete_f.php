<?php
include '00_includes/session.php';

if(isset($_POST['delete'])){


  $id = $_POST['id'];
  $sql = "DELETE FROM ordenes_detalles WHERE id = '$id'";
  if($conn->query($sql)){
    $_SESSION['success'] = 'Item Eliminado successfully';
  }
  else{
    $_SESSION['error'] = $conn->error;
  }




}
else{
  $_SESSION['error'] = 'la funcion NO se ejecuto';
}

header('location: carrito.php');

?>