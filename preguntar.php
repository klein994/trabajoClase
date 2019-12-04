<?php

$email   = $_GET['email'];

$respuesta1 = 'Usuario ya registrado <img src="https://cdn.pixabay.com/photo/2017/02/12/21/29/false-2061131_960_720.png"style="width:19px;">';
$respuesta2 = ' Usuario disponible <img src="https://cdn.pixabay.com/photo/2017/03/28/01/46/check-mark-2180770_960_720.png"style="width:16px;">';
include("conexion.php");

$existe = "SELECT email FROM usuarios
            WHERE email ='$email'";

$existe_ej = mysqli_query($conexion,$existe);

if ($existe_ej === false){

    echo "error, ver sql";
}else{
    
    if(mysqli_num_rows($existe_ej) > 0){
        echo $respuesta1;
   
    }else{
        echo $respuesta2;
        
      
        
    }
}

?>