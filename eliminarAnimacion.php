
<?php
include 'conexion.php';

$conexion = db();
$id=$_GET['id'];
$query="DELETE FROM animacion WHERE id=$id";

mysqli_query($conexion, $query);

header("Location: quitFormAnimadores.php");
exit;
?>