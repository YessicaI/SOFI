
<?php
include 'conexion.php';

$conexion = db();
$id=$_GET['id'];
$query="DELETE FROM musica WHERE id=$id";

mysqli_query($conexion, $query);

header("Location: quitFormMusica.php");
exit;
?>