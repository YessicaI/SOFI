
<?php
include 'conexion.php';

$conexion = db();
$id=$_GET['id'];
$query="DELETE FROM reposteria WHERE id=$id";

mysqli_query($conexion, $query);

header("Location: quitFormReposteria.php");
exit;
?>