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
  $terminos = $_POST['terminos'] == 1 ? true : false;
  $pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);  
  $rol_id = $_POST['rol_id'];
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