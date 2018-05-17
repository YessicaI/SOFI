<?php
ob_start();
?>
 
<?php
include 'conexion.php';
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.
 $conexion = db();

$file_dir = "" . basename($_FILES['imagen']['name']);
$str="INSERT INTO musica (id,nombre, imagen, descripción, telefono, correo, facebook, clasificación, paquete, precio) 
    values (id,'".$_POST['nombre']."','".basename($_FILES['imagen']['name'])."','".$_POST['descripción']."',
    '".$_POST['telefono']."','".$_POST['correo']."','".$_POST['facebook']."','".$_POST['clasificación']."',
    '".$_POST['paquete']."','".$_POST['precio']."')";
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


