<?php
ob_start();
?>
 
<?php
include 'conexion.php';
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.
 $conexion = db();

$file_dir = "" . basename($_FILES['imagen']['name']);
$str="INSERT INTO florerias (id,nombre, descripción, dirección, codigo_postal, horario, encargado, telefono, imagen, redSocial) 
    values (id,'".$_POST['nombre']."','".$_POST['descripción']."','".$_POST['dirección']."',
    '".$_POST['codigo_postal']."','".$_POST['horario']."','".$_POST['encargado']."','".$_POST['telefono']."','"
    .basename($_FILES['imagen']['name'])."','".$_POST['redSocial']."')";
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $file_dir)) 
{
	$consulta=mysqli_query($conexion, $str);
    header("Location: home.php");
    exit;
}
echo 'Más información de depuración:';
print_r($_FILES['imagen']['name']);
?>
<?php
ob_end_flush();
?>

