<?php
session_start();
include 'conn.php';

if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
	header('location: index.php');   
}

$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
$query = $conn->query($sql);
$user = $query->fetch_assoc();


$timezone = 'America/Managua';
date_default_timezone_set($timezone);
$fecha_y_hora_actual = date("Y-m-d H:i:s");
$fecha_actual = date("Y-m-d");
$fecha_actual_f = date("d-m-Y");
$hora_actual = date("H:i:s");
include 'funciones.php';


?>



