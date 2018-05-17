<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Animacion</title>
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

        <div class="row" align="center">
            <div class="col-md-12" >
                   <?php include'carouselAnimacion.php'; ?>
            </div>
        </div>
        <br>
        <br>
        <div class="row" align="center">
            <div class="col-md-12" >
                <div class="panel panel-default">
                     <img src="img/animacionb.png" alt="">
                     <br><br>
                     <h7><center>Encontraras grupos musicales, mariachis, bailarines, iluminación, todo lo que necesitas para tu fiesta</center></h7>
                </div>
            </div>
        </div>
        <br>
        <br>

         <!--Empieza codigo de iconos de paquetes-->
           <div class="row">
                <div class="col-md-4">
                    <P align="Center"><a href="musica.php"><img src="img/iconoMusica.png" alt="" width="400" height="400"></a></p>
                </div>
                <div class="col-md-4">
                    <P align="Center"><a href="iluminacion.php"><img src="img/iconoIluminacion.png" alt="" width="400" height="400"></a></p>
                </div>
                 <div class="col-md-4">
                    <P align="Center"><a href="animadores.php"><img src="img/iconoAnimacion.png" alt="" width="400" height="400"></a></p>
                </div>
            </div>
        

        
     </div>

    <script src="Tema_6/js/jquery-3.2.1.min.js"></script>
    <script src="Tema_6/js/popper.min.js"></script>
    <script src="Tema_6/js/popper.min.js.map"></script>
    <script src="Tema_6/js/popper.js"></script>
    <script src="Tema_6/js/bootstrap.min.js"></script>
    <div id="fb-root"></div>

</body>