<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" align="center">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                          <?php 
	                      	include ('conexion.php');
		                    $conexion = db();
	                   	  ?>
                         <div class="carousel-inner ">
                         <?php 
		             	    $str="SELECT * from carouselRenta";
			                $consulta = mysqli_query ($conexion,$str);
			                $count=1;
			                while ($filas=mysqli_fetch_assoc($consulta)) {
			                if($count==1){$act="active";}else{$act="";}	
			            	?>    
        <div class="carousel-item 
                         <?php echo $act; ?> "><!--Apertura del Item-->
                         <img src="<?=$filas['imagen']?>" alt="<?=$filas['titulo']?>">
                         <div class="carousel-caption d-none d-md-block">
                         <p><?=$filas['titulo']?>            
                         </div><!--cierre del caption-->
                        </div>  <!--cierre del item-->      
		                <?php  $count++; }?>

       </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
