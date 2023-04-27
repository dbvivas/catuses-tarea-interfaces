<?php
  //session_start();
  //include '00_includes/conn.php';
  include '00_includes/session.php';

if(isset($_POST['add'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $usuario = $_POST['username'];
  $contrasenia = $_POST['clave'];
  $email = $_POST['email'];
 
if(isset($_POST['terminos']) && 
   $_POST['terminos'] == 'agree') 
{
    $terminos = 1;
}
else
{
    $terminos = 0;
} 

  $pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);  
  $rol_id = 1;
  $empresa_id = $_POST['empresa_id'];
  $sucursal_id = $_POST['sucursal_id'];



  $sql = "INSERT INTO admin (firstname, lastname, username, password, rol_id, photo, empresa_id,sucursal_id,correo,terminos)
  VALUES ('$firstname', '$lastname', '$usuario', '$pass_cifrado','$rol_id', '$filename','$empresa_id','$sucursal_id','$email','$terminos')";
  if($conn->query($sql)){


    //$_SESSION['success'] = $sql;
    $_SESSION['success'] = 'Registro Exitoso, Ingresa tus credenciales';
    header('location: index.php');
  }
  else{
    $_SESSION['error'] = $conn->error.' Error al realizar el registro';
    header('location: register.php');
  }

}
else{
  $_SESSION['error'] = 'Fill up add form first';
}




?>