<?php 
require_once 'controllers/connection.php';
$email=$_POST['email'];
$contact=$_POST['contact'];


 try {
     if(connect()){

        $query="INSERT INTO contact_information (email, contact) VALUES ('$email', '$contact')";
    if($conn->query($query)){
        include("index.php");
        ?>
        <br>
        <h1 class="badge bg-success w-100">Sus datos fueron recibidos EXITOSAMENTE!</h1>
        <?php
    }else {
        echo mysql_errno($query) . ": " . mysql_error($query) . "\n";
        die("Error al insertar datos");
       
    }
    mysqli_close($conn);

     }else {
         echo "No se puede conectar" . "\n";
     }
    
 } catch (\Throwable $th) {
     echo "error Bases de tados: ".$th;
 }

?>