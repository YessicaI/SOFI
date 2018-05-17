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
		<div class="row" align="center">
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-sm-10 col-sm-offset-5">
							<div class="panel panel-sofi">
								<div class="panel-heading">
									<img src="img/iconoRegistro.png"></a><br>
									Bienvenido<br>
									Registro
								</div>
								<div class="panel-body">
									<form action="signup.php" method="post">
										<div class="form-group">
											<label for="pass"><img src="img/iconoNombre.png" width="45" height="45">Nombre:</label>
											<input type="text" class="form-control" placeholder="Nombre" name="nombre" required onkeypress="return validar(event)">
										</div>
										<div class="form-group">
										    <label for="email"><img src="img/iconoCorreo.jpg" width="30" height="20">Correo Electronico:</label>
											<input type="email" class="form-control" placeholder="E-mail" name="email" required>
										</div>
										<div class="form-group">
											<label for="pass"><img src="img/iconoContraseña.png" width="30" height="35">Contraseña:</label>
											<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
										</div>
										<div class="form-group">
											<button type="submit" class="submit"><a href="javascript:history.back(-1);" title="Ir la página anterior">REGRESAR</a></button>
											<button type="submit" class="submit">REGISTRARSE</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel-default">
				<img src="img/TITULO.png" width="350" height="150">
				<h3>Es un sistema organizador de fiestas</h3>
			    </div>
			</div>
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