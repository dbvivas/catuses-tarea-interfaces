<?php

//echo 'archivo de conexion';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcthecase_bd";
error_reporting(E_ALL);
	//No me muestra errores
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
if ($conn->connect_errno) {
	echo "Nuestro sitio experimenta fallos....01x";
	exit();
}else
{
	echo "<h1>conexion al servidor:. conect</h1>";
}


$timezone = 'America/Mexico_City';
date_default_timezone_set($timezone);
$fecha_y_hora_actual = date("Y-m-d H:i:s");
$fecha_actual = date("Y-m-d");
$hora_actual = date("H:i:s");
$fecha_actual_ni = date("d/m/Y");
$hora_actual_ni = date("h:i:s");
$hoy=$fecha_actual;

?>