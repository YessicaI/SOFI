<?php
session_start();
if (isset($_SESSION['tipo'])) 
{
	if ($_SESSION['tipo']==1) 
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
		<div class="row" align="center">
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-sm-10 col-sm-offset-5">
							<div class="panel panel-sofi">
								<div class="panel-heading">
									<img src="img/arreglo/arregloFloral.png" width="100" height="100"></a><br>
									Ingresa una nueva Florería
								</div>
								<div class="panel-body">
									<form action="addFloreria.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Nombre" name="nombre">
										</div>
										<div class="form-group">
											<textarea rows="5" placeholder="Descripción del negocio" class="form-control" name="descripción"></textarea>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Dirección" name="dirección">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Codigo Postal" name="codigo_postal">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Horario" name="horario">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Encargado" name="encargado">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Telefono" name="telefono">
										</div>
										<div class="form-group">
											<input type="file" class="form-control" placeholder="Contraseña" name="imagen">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Redes sociales" name="redSocial">
										</div>
										
										<div class="form-group">
											<button type="submit" class="submit">AGREGAR</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<img src="img/c1.png" width="400" height="400" alt="" class="rounded-circle"></a>
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
