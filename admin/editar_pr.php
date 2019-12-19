<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$sede = $_POST['sede'];
$correo = $_POST['correo'];
// 1. Me conecto a la BD
include("../conexion.php");
// 2. Genero la query (SELECT)
$update = "UPDATE usuarios
				SET 
				nombre = '$nombre',
				apellido = '$apellido',
				dni = $dni,
				direccion = '$direccion',
				telefono = $telefono,
				edad = '$edad',
				sede = '$sede',
				email = '$correo'
				WHERE id = $id";
// 3. Ejecutamos la query
$ej = mysqli_query($conexion, $update);

// 4. Pregunto si NO funcionó
if ($ej === false) {
	echo "error, ver SQL";
} else {

	header("location:interno.php");
}
?>