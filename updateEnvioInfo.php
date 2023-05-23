<?php
include '00_includes/session.php';

if(isset($_POST['envioInfo'])){


  $id = $_POST['id'];
  $colonia = $_POST['colonia'];
  $codigoPostal = $_POST['codigoPostal'];
  $municipio = $_POST['municipio'];
  $telefono = $_POST['telefono'];

  $email = $_POST['email'];
  $address = $_POST['address'];


  $address = $_POST['address'];
  



  $sql = "UPDATE ordenes SET colonia = '$colonia', codigoPostal = '$codigoPostal' 
  , municipio = '$municipio', telefono = '$telefono'
  , email = '$email', status = '2', address = '$address'
  WHERE id = '$id'";
  if($conn->query($sql)){
    $_SESSION['success'] = 'Data updated successfully';
    header('location: finish.php');
    //echo "success: ".$sql;
  }
  else{
    $_SESSION['error'] = $conn->error;
    header('location: enviar.php');
    //echo "error1: ".$sql;
  }




}
else{
  $_SESSION['error'] = 'la funcion NO se ejecuto';
  header('location: enviar.php');
  //echo 'la funcion NO se ejecuto'.$sql;
}



?>