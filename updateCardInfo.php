<?php
include '00_includes/session.php';

if(isset($_POST['cardInfo'])){


  $id = $_POST['id'];
  $nombreUsuario = $_POST['nombreUsuario'];
  $numeroTarjeta = $_POST['numeroTarjeta'];
  $vence = $_POST['vence'];
  $cvv = $_POST['cvv'];
  



  $sql = "UPDATE ordenes SET nombreUsuario = '$nombreUsuario', numeroTarjeta = '$numeroTarjeta' 
  , vence = '$vence', cvv = '$cvv'
  WHERE id = '$id'";
  if($conn->query($sql)){
    $_SESSION['success'] = 'Data updated successfully';
    header('location: enviar.php');
    //echo "success: ".$sql;
  }
  else{
    $_SESSION['error'] = $conn->error;
    header('location: metodo_pago_select.php');
    //echo "error1: ".$sql;
  }




}
else{
  $_SESSION['error'] = 'la funcion NO se ejecuto';
  header('location: metodo_pago_select.php');
  //echo 'la funcion NO se ejecuto'.$sql;
}



?>