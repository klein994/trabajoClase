 <?php
	$id = $_GET['id'];

	// 1. Me conecto a la BD
	include("../conexion.php");

	// 2. Genero la query (SELECT)
	$borrar = "DELETE FROM usuarios WHERE id = $id";

	// 3. Ejecutamos la query
	$ej = mysqli_query($conexion, $borrar);

	// 4. Pregunto si NO funcionó
	if ($ej === false) {
		echo "error, ver SQL";
	} else {
		header("location:interno.php");
	}
	?>
	<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <title>Englishowl</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../animacion.css">
    <link href='../imagenes/favicon.png' rel='icon' type='image/x-icon' />
</head>

<body>
    <div id="overlayMobile" class="ovelay"></div>
    <!-- skip navigation  ojo-->
    <a href="#contenido" class="cloak">saltar contenido principal</a>
    <!-- nav -->

    <nav id="contenido">
        <div class="logo">
            <img class="fadeInUpBig" src="../imagenes/logo_tramsparente2.png" alt="" height="60px" width="60px">
        </div>

        <button id="show-list">
            <div class="hamb">
                <spam class="line"></spam>
                <spam class="line"></spam>
                <spam class="line"></spam>
            </div>
        </button>

        <div class="contenedornav-2" id="main-ul">

            <ul class="nav-2" id="nav-2">

                <li class="nav-li">
                    <a href="#" class="nav-a">¡Registro borrado!</a>
                </li>
               


        </div>

        <div class="in">
            <a class="ini" href="interno.php"> REGRESAR</a>
        </div>
    </nav>

    <div class="cuadro-formulario">
        <div class="formulario-inscripcion">
            <div class="cuadro-alerta">
                <img src="../imagenes/logo_tramsparente.png" alt="">

                <h1>English Owl Institute</h1>
                <img src="https://cdn.pixabay.com/photo/2017/03/28/01/46/check-mark-2180770_960_720.png" style="width:50px;">
                <h2>Registro borrado</h2>
                


                <form action="interno.php">
                    <input class="button" id="siguiente" type="submit" value="salir" />
                </form>
            </div>
        </div>
    </div>
</body>

<div class="redes" class="fadeInLeft">

    <a href="">
        <img class="img" src="../imagenes/faceMenu.jpg" alt="Ir a Faceboock">
    </a>
    <a href="">
        <img class="img" src="../imagenes/instagramMenu.jpg" alt="Ir a Instagram">
    </a>
    <a href="">
        <img class="img" src="../imagenes/twitterMenu.jpg" alt="Ir a Twitter">
    </a>
    <a href="https://blended.com.ar/login">
        <img class="img" src="../imagenes/blendedMenu.jpg" alt=" Ir a Blended">
    </a>
    <a href="https://api.whatsapp.com/send?phone=0123456789">
        <img class="img" src="../imagenes/wsMenu.jpg" alt="Escribir a Whatsapp">
    </a>

</div>

<script src="script.js"></script>


</html>