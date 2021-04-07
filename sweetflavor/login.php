<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bdlina";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connect)
{
	die("Error al conectar con la Base de datos: ".mysqli_connect_error());
}

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

$query = mysqli_query($connect,"SELECT * FROM login WHERE usuario = '".$usuario."' and password = '".$pass."'");
$a = mysqli_num_rows($query);

if($a > 1)
{
	header("Location: inicio.html");
}
else if($a == 0)
{   
	header("Location: login.html");
}

?>