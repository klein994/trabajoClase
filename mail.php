<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];	
$email = $_POST['email'];
$text = $_POST['text-area'];



    


$to = "klein994@hotmail.com";

$subject = "Consulta English Owl Institute";
$headers .= "MIME-Version: 1.0" . "\r\n";	
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: http://klein994.000webhostapp.com/ <consulta@klein994.000webhostapp.com>'."\r\n";

 
$message = "<!DOCTYPE html>


<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <style>
.cuadro-formulario {
    text-align: center;
   margin: auto;
    width: 70%;
    height: auto;
    background-color: white;
    padding: 20px;
border-radius: 10px;
border: 1px solid black;

}

.formulario-inscripcion a,
.formulario-mail a,
.cuadro-alerta a {
cursor: pointer;
border: none;
outline: none;
width: 100%;
height: 40px;
background: green;
color: #fff;
font-size: 18px;
border-radius: 20px;
padding:10px;
}

.formulario-inscripcion a:hover,
.formulario-mail a:hover {
cursor: pointer;
border: none;
outline: none;
width: 100%;
height: 40px;
background: green;
color: #fff;
font-size: 18px;
border-radius: 20px;
}


.cuadro-alerta img {
    position: relative;
    width: 70px;
    height: auto;
    top: 10px;
    text-align: center;
}






.cuadro-alerta a {
    color:white;
    border: none;
    border-radius:10px;
    background: green;
    outline: none;
    height: 25px;
    width: 100%;
    margin: 0 0 20px 0;
    font-size: 15px;
    
}






</style>
</head>

<body>


<div class='cuadro-formulario'>
<div class='formulario-inscripcion'>
<div class='cuadro-alerta'>
<img src='https://klein994.000webhostapp.com/imagenes/logo_tramsparente.png' alt=''>

<h1>English Owl Institute</h1>
<h2>$nombre $apellido</h2>
<h2>Te pregunta</h2>
    <p>$text</p>
<h2>Respondele a:</h2>
<p>$nombre $apellido</p>
<p>Correo: $email</p>
<p>Telefono: $telefono</p>



</div>
</div>
</div>
</body>";
 
mail($to, $subject, $message, $headers);



        header("location:res_consulta.php");
        

        ?>