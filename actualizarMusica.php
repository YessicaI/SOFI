<?php
include 'conexion.php';

$conexion = db();
$id=$_GET['ID'];
$query="UPDATE FROM musica WHERE ID=$id";

mysqli_query($conexion, $query);

header("Location: upFormMusica.php");
exit;
?>

