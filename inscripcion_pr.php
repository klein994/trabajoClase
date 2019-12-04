
<?php
	// registro_pr.php
	
	// 0. Consigo los datos
	$nombre = $_POST['nombre'];
	$apellido  = $_POST['apellido'];
	$dni  = $_POST['dni'];
    $direccion  = $_POST['direccion'];
	$edad  = $_POST['edad'];    
	$telefono  = $_POST['telefono'];
	$sede  = $_POST['sede'];
	$email   = $_POST['email'];
	$clave   = md5($_POST['clave']);
	
	// 1. Conectarme a la BD
	include("conexion.php");
	
	// 2. Crear la query
	$insertar = "INSERT INTO usuarios
				 VALUES(
					NULL,
					'$nombre',
					'$apellido',
					'$dni',
					'$direccion',
					'$edad',
					'$telefono',
					'$sede',
					'$email',
					'$clave'
				 )";
	
	// 3. Ejecutarla
	$ej = mysqli_query($conexion, $insertar);
	
	// 4. Preguntar si funcionó
	if($ej === true){
        	// Redirección a index.php
		header("location:res_enviar.php");
        
        
		
	
		
	} else {
		echo "Error, ver SQL";
	}
	
?>