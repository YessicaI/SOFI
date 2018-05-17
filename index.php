<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SOFI</title>
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
         <!--Empieza codigo de carousel y tabla -->
        <div class="row" align="center">
            <div class="col-md-8">
             <?php include'carousel.php'; ?>
            </div>
            <div class="col-md-4">
                <table>
                    <tr>
                        <td>
                            <h1>Registro</h1>
                        </td>
                        <tr>
                         <td>
                             <div class="row" align="center">
                                 <div class="col-md-6">
                                   <a href="ingresar.php"> <img src="img/iconoUsu.png"></a>
                                 </div>
                                  <div class="col-md-6">
                                     <a href="carritodecompras.php" title="ver carrito de compras">
                                     <img src="img/iconoCa.png">
    
                                  </div>
                            </div>
                        </td>
                        <tr>
                             <td>
                                <br>
                                <h2>¿Quienes somos?</h2>
                                <div class="row" align="center">
                                    <div class="col-md-12"> 
                                        <img src="img/somos.png" >
                                    </div>
                                </div>
                                <br>
                            </td>
                        <tr>
                            <td>
                              
                            </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <br>
         <!--Empieza codigo de banner paquete-->
          <div class="row" align="center">
            <div class="col-md-12">
                <img src="img/bannerP.png">
            </div>
          </div>
          <!--Empieza codigo de iconos de paquetes-->
           <div class="row">
            <div class="col-md-3">
              <P align="Center"><img src="img/iconoBodas.png" alt="" width="200" height="200"></p>
            </div>
            <div class="col-md-3">
              <P align="Center"><img src="img/iconoCumpleaños.png" alt="" width="200" height="200"></p>
            </div>
             <div class="col-md-3">
              <P align="Center"><img src="img/iconoGraduación.png" alt="" width="200" height="200"></p>
            </div>
             <div class="col-md-3">
              <P align="Center"><img src="img/iconoxvaños.png" alt="" width="200" height="200"></p>
            </div>
          </div>
          <br>
          <br>
        <!--Empieza codigo de ayuda index-->
          <div class="row" >
            <div class="col-md-8">
                 <img src="img/ayuda.png">
            </div>
            <div class="col-md-4">
                <a href="Ayuda.php" class="boton1">Pulsa aquí</a>
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