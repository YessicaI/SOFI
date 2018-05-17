<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detalles de servicio</title>
    <link rel="shortcut icon" href="img/iconoF.png" type="image/png" />

    <!-- Versión compilada y comprimida del CSS de Bootstrap -->
    <link rel="stylesheet" href="Tema_6/css/bootstrap.min.css">
    <link rel="stylesheet" href="Tema_6/font-awesome-4.7.0/css/font-awesome.min.css">
    <LINK REL=StyleSheet HREF="estilo1.css" TYPE="text/css" MEDIA=Screen>
    

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="img/titulo.png">
                <a href="http://www.facebook.com" target="_blank"><img alt="siguenos en facebook" height="45" src="img/f.png" title="siguenos en facebook" width="45" /></a>
                <a href="http://www.gmail.com" target="_blank"><img alt="Mandanos un correo" height="45" src="img/g.png" title="siguenos en Google+" width="45" /></a>
                <a href="http://www.twitter.com" target="_blank"><img alt="siguenos en Twitter" height="45" src="img/t.png" title="siguenos en Twitter" width="45" /></a>
                <a href="http://www.youtube.com" target="_blank"><img alt="Canal de youtube" height="45" src="img/y.png" title="Canal de youtube" width="45" /></a>
                <a href="http://www.instagram.com" target="_blank"><img alt="síguenos en Instagram" height="45" src="img/i.png" title="sígueme en Instagram" width="45" /></a>
            </div>
        </div>
        <br>
        <br>
        <!--Empieza codigo de barra de navegacion-->
        <div class="row" align="center">
            <div class="col-md-12" >
                <?php include_once 'navbar.php'; ?>
            </div>
        </div>
        <br>
        <br>



	<section>
		
		<?php 
					include_once 'conexion.php';
                    $conexion = db();

					$str="SELECT * FROM florerias where ID=".$_GET['id'];
					$consulta=mysqli_query($conexion, $str);
					while($filas=mysqli_fetch_assoc($consulta))
					{
						?>
						<div class="container">
						   <h4><center>Detalles del servicio de Floreria</center></h4>
						   <div class="row">
            					<div class="col-md-6">
								<h5><img src="img/iconoNegocio.png" width="30" height="30"> Nombre del negocio:</h5><?php echo $filas['nombre'];?><br>
								<h5><img src="img/iconoDescripcion.png" width="30" height="30"> Descripción:</h5><?php echo $filas['descripción'];?><br>
								<h5><img src="img/iconoDireccion.png" width="30" height="30"> Dirección:</h5><?php echo $filas['dirección'];?><br>
								<h5><img src="img/iconoCodigoPostal.png" width="30" height="30"> Codigo Postal:</h5><?php echo $filas['codigo_postal'];?><br>
								<h5><img src="img/iconoHorario.png" width="30" height="30"> Horario:</h5><?php echo $filas['horario'];?>
								</div>
								<div class="col-md-6">
								<img src="<?php echo $filas['imagen'];?>" width="500" height="500">
								</div>
								<div class="col-md-12">
									<button type="submit" class="submit"><a href="javascript:history.back(-1);" title="Ir la página anterior">REGRESAR</a></button>
								</div>
							 </div>
						</div>
						<?php 
					}
					
?>
	</section>
</body>
</html>