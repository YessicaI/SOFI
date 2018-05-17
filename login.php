<?php
include 'conexion.php';

$conexion = db();
$str="SELECT * FROM usuarios WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
$consulta=mysqli_query($conexion, $str);

if (mysqli_num_rows($consulta)==1)
{
	$filas=mysqli_fetch_assoc($consulta);
	@session_start();
	$_SESSION['nombre']=$filas['nombre'];
	$_SESSION['email']=$filas['email'];
	$_SESSION['tipo']=$filas['tipo'];
	header("Location: home.php");
	exit;
}
else 
{
	header("Location: index.php");
	exit;
}
?>
