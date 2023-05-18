<?php
include '00_includes/session.php';

if(isset($_POST['detalles'])){



  $id = $_POST['id'];
  $observaciones = $_POST['observaciones'];
  $filename = $_FILES['dato8']['name'];
  if (!empty($filename)) {
    move_uploaded_file($_FILES['dato8']['tmp_name'], 'dist/img/' . $filename);
  } 



 $sql = "UPDATE ordenes_detalles SET img_user_upload = 'dist/img/$filename', observacion = '$observaciones' WHERE id = '$id'";
  if($conn->query($sql)){
    $_SESSION['success'] = 'Usuario photo updated successfully';
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