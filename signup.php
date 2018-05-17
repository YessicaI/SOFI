<?php
$servername = "localhost";
$username = "root";
$password = "19962218jessi";
$dbname = "sofi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  $nombre=$_POST['nombre'];
  $email=$_POST['email'];
  $password=$_POST['password'];

 $sql = "INSERT INTO usuarios VALUES (id,'$nombre',
                                           '$email',
                                           '$password',0)";
 
if ($conn->query($sql) === TRUE) {
     header("Location: ingresar.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   

?>