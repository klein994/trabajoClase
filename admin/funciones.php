<?php
	// funciones.php
	
	// Preguntar si NO existe la variable de sesión
	
	session_start();
	if(isset($_SESSION['ad']) === false){
		// Este usuario no está logueado
		// entonces lo mandamos al index
		header("location:login.php");
	}
	
	function nombre($id){
		include("../conexion.php");
		$buscar = "SELECT usuario FROM superusuario
				   WHERE id = $id";
		$ej = mysqli_query($conexion, $buscar);
		$nombre = mysqli_fetch_array($ej);
		return $nombre['usuario'];
	}
	
?>










