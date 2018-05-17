<?php
	session_start();
	
	if (isset($_SESSION['tipo'])) 
	{
		if ($_SESSION['tipo']==true) 
		{
			?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>SOFI</title>
          <link rel="shortcut icon" href="img/iconoF.png" type="image/png" />
	
	    <!-- Bootstrap -->
	   
	    <link href="estilo1.css" rel="stylesheet">
	    <link rel="stylesheet" href="Tema_6/css/bootstrap.min.css">
       <link rel="stylesheet" href="Tema_6/font-awesome-4.7.0/css/font-awesome.min.css">
	       <LINK REL=StyleSheet HREF="estilo1.css" TYPE="text/css" MEDIA=Screen>
    
	
	    
	
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
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
			<div class="col-md-12">
				<div class="panel panel-sofi">
					<div class="panel-default">
						<div class="row" align="center">
							<div class="col-md-12">
								<img src="img/EMusica.png" width="100" height="100"></a><br>
						 		<h4><center>Elimina proveedor de servicio musical</center></h4>
							</div>	
						</div>
					<?php 
					include_once 'conexion.php';
                    $conexion = db();
					$str="SELECT * FROM musica";
					$consulta=mysqli_query($conexion, $str);
					while ($filas=mysqli_fetch_assoc($consulta)) 
					{
						?>
				
						<div class="row" align="center">
							<div class="col-md-4">
								 <img src="<?php  echo $filas['imagen'];?>" width="160" height="100" alt="">
							</div>

								<div class="col-md-6">
									<h1>Nombre: <h7><?php echo $filas['nombre'];?></h7></h1>
								</div>
								<div class="col-md-2">
									<form action="eliminarMusica.php?id=<?php echo $filas['id']; ?>" method="POST">
										<input type="hidden" value="id=<?php echo $filas['id']; ?>" name="ID">
											<button type="submit"  onclick= 'alert("¿SEGURO QUE DESEA ELIMINAR ESTE PROVEEDOR?")' class="btn btn-default"><img src="img/eliminar1.png" width="50" height="50"><span aria-hidden="true"></span></button>
									</form>
								</div>
						</div>	
						<?php 
					}
					
					?>
					</div>
					<div class="row" align="center">
						<div class="col-md-12">
								<button type="submit" class="submit"><a href="javascript:history.back(-1);" title="Ir la página anterior">REGRESAR</a></button>
						</div>	
					</div>
				</div>
		</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="js/jquery-1.11.3.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
			<?php
		}
		else 
		{
			header("Location: home.php");
		}
		
	}
