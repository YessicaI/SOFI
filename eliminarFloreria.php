<?php
include 'conexion.php';

$conexion = db();
$id=$_GET['ID'];
$query="DELETE FROM florerias WHERE ID=$id";

mysqli_query($conexion, $query);

header("Location: quitFormFloreria.php");
exit;
?>
