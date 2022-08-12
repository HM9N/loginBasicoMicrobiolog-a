<?php

$dbpass = "";
$dbname = "usuariosMicrobiologia";
$dbhost = "localhost";
$dbuser = "root";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$pass = $_POST["txtpassword"];
$nombre = $_POST["txtusuario"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	echo "¡Hola!" .$nombre;
}
else if ($nr == 0) 
{

	echo "<script> alert('Usuario o contraseña incorrectos');window.location= 'login.html' </script>";
}
	


?>