<?php 
	function db ()
	{
		$host="localhost";
		$user="root";
		$passw="19962218jessi";
		$db="sofi";
		$link = mysqli_connect($host,$user,$passw,$db);
		mysqli_query($link,"SET NAMES 'utf8'");
		/* verificar la conexión */
		if (mysqli_connect_errno()) {
		    printf("Conexión fallida: %s\n", mysqli_connect_error());
		    exit();
		}
		return $link;
	}