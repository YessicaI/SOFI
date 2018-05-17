
<?php
include 'conexion.php';

$conexion = db();
$id=$_GET['id'];
$query="DELETE FROM iluminacion WHERE id=$id";

mysqli_query($conexion, $query);

header("Location: quitFormIluminacion.php");
exit;
?>