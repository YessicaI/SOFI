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
	    <title>ANIMACIÓN</title>
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
		<div class="row" align="center">
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-sm-10 col-sm-offset-5">
							<div class="panel panel-sofi">
								<div class="panel-heading">
									<img src="img/animador.png" width="100" height="100"></a><br>
									Ingresa un nuevo servicio de animadores de fiestas
								</div>
								<div class="panel-body">
									<form action="addAnimacion.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<h8><img src="img/iconoNegocio.png" width="30" height="30"> Ingresa nombre del proveedor o negocio:</h8>
											<input type="text" class="form-control" placeholder="Nombre" name="nombre" required >
										</div>
                                        	<div class="form-group">
											<h8><img src="img/imagen.png" width="30" height="30"> Ingresa imagen del servicio a ofrecer:</h8>
											<input type="file" class="form-control" placeholder="Contraseña" name="imagen" required>
										</div>
										<div class="form-group">
											<h8><img src="img/iconoDescripcion.png" width="30" height="30">Ingresa descripción del servicio:</h8>
											<textarea rows="5" placeholder="Descripción del negocio" class="form-control" name="descripción" required></textarea>
										</div>
                                        <div class="form-group">
											<h8><img src="img/iconoTelefono.png" width="30" height="30">Ingresa número de telefono:</h8>
											<input type="text" class="form-control" placeholder="Telefono" name="telefono"  required onkeypress="return valida(event)">
										</div>
										<div class="form-group">
											<h8><img src="img/iconoCorreo.png" width="30" height="30">Ingresa correo electronico:</h8>
											<input type="email" class="form-control" placeholder="Correo electronico" name="email" required>
										</div>
										<div class="form-group">
											<h8><img src="img/f.png" width="30" height="30">Ingresa red social (Facebook):</h8>
											<input type="text" class="form-control" placeholder="Facebook" name="facebook">
										</div>		
										<div class="form-group">
											<h8><img src="img/iconoDireccion.png" width="30" height="30">Ingresa dirección:</h8>
											<input type="text" class="form-control" placeholder="Dirección" name="dirección" required>
										</div>
										<div class="form-group">
											<h8><img src="img/iconoPaquete.png" width="30" height="30">Agrega descripción de paquete que ofrece:</h8>
											<input type="text" class="form-control" placeholder="Descripción del paquete que ofrece" name="paquete" required>
										</div>
										<div class="form-group">
											<h8><img src="img/iconoPrecio.png" width="30" height="30">Ingresa precio del paquete que ofrece:</h8>
											<input type="text" class="form-control" placeholder="Precio del paquete" name="precio"  required >
										</div>		
										<div class="form-group">
											<button type="submit" class="submit"><a href="javascript:history.back(-1);" title="Ir la página anterior">REGRESAR</a></button>
											<button type="submit" class="submit">AGREGAR</button>
										    <button class="reset" type="reset" value="Pulsame" onclick="Borrar()">Borrar los datos</button>
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
<script>
        function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

</script>
<script type="text/javascript">
function validar(e) { // 1
tecla = (document.all) ? e.keyCode : e.which; // 2
if (tecla==8) return true; // 3
patron =/[A-Za-z\s]/; // 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}
</script>

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

