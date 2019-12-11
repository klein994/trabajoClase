<?php

// registro_pr.php
	
	// 0. Consigo los datos
	$nombre = $_POST['nombre'];
	$apellido  = $_POST['apellido'];	
	$email   = $_POST['email'];
	


        


	$to = $email;
	$mail = base64_encode($email);
	$subject = "Confirmacion de inscripcion English Owl Institute";
	$headers .= "MIME-Version: 1.0" . "\r\n";	
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: http://klein994.000webhostapp.com/ <klein994.000webhostapp.com>'."\r\n";

	 
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
<h2>Confirma tu mail</h2>
        <p>El equipo de English Owl Institute te da la bienvenida y las gracias por elegirnos, por favor dar click en CONFIRMAR para continuar con el proceso de inscripción. </p>
        <p>Ademas en la brevedad un representante de nuestro equipo se contactará con usted para ampliar la información que necesites. </p>
        
		
		
	
		
		
       
        <a class='button' href='https://klein994.000webhostapp.com/formulario2.php?mail=$mail'>CONFIRMAR</a>
</div>
    </div>
</div>
</body>";
	 
mail($to, $subject, $message, $headers);






header("location:res_enviar.php");
	

		
        
		
	
	
	
?>
