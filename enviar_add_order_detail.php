<?php
include '00_includes/session.php';

if(isset($_POST['enviar'])){



  $userId = $_POST['userId'];
  $ordenId = $_POST['ordenId'];
  $productoId = $_POST['productoId'];
  $cant = $_POST['cant'];


  $sql = "SELECT COUNT(*) as total FROM ordenes WHERE id = ".$ordenId;
  $query = $conn->query($sql);
  $datosx = $query->fetch_assoc();   
  $total = $datosx['total'];


  if ($total>0) {

    $sql = "INSERT INTO ordenes_detalles ( orden_id,producto_id, cant )  VALUES  ('$ordenId','$productoId','$cant' )";
    if($conn->query($sql)){
      $_SESSION['success'] = ' añadido satisfactoriamente';
    }
    else{
      $_SESSION['error'] = $conn->error;
    }
    
  }else{

    $sql = "INSERT INTO ordenes ( user_id )  VALUES  ('$userId' )";
    if($conn->query($sql)){
      $_SESSION['success'] = ' añadido satisfactoriamente';

      $sql = "INSERT INTO ordenes_detalles ( orden_id,producto_id, cant )  VALUES  ('$ordenId','$productoId','$cant' )";
      if($conn->query($sql)){
        $_SESSION['success'] = ' añadido satisfactoriamente';
      }
      else{
        $_SESSION['error'] = $conn->error;
      }

    }
    else{
      $_SESSION['error'] = $conn->error;
    }

  }




}
else{
  $_SESSION['error'] = 'la funcion NO se ejecuto';
}
//header('location: seleccion.php?id='.$productoId);
header('location: inicio.php');
?>