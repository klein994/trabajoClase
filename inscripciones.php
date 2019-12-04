<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <title>Englishowl</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="animacion.css">
    <link href='imagenes/favicon.png' rel='icon' type='image/x-icon' />
</head>

<body>
    <div id="overlayMobile" class="ovelay"></div>
    <!-- skip navigation  ojo-->
    <a href="#contenido" class="cloak">saltar contenido principal</a>
    <!-- nav -->

    <nav id="contenido">
        <div class="logo">
            <img class="fadeInUpBig" src="imagenes/logo_tramsparente2.png" alt="" height="60px" width="60px">
        </div>

        <button id="show-list"><div class="hamb">
            <spam class="line"></spam>
            <spam class="line"></spam>
            <spam class="line"></spam>
        </div></button>

        <div class="contenedornav-2" id="main-ul">

            <ul class="nav-2" id="nav-2">

                <li class="nav-li">
                    <a href="index.html" class="nav-a">INICIO</a>
                </li>
                <li class="nav-li">
                    <a href="index.html#nosotros" class="nav-a">NOSOTROS</a>
                </li>
                <li class="nav-li">
                    <a href="index.html#curso" class="nav-a">CURSOS</a>
                </li>
                <li class="nav-li">
                    <a href="index.html#agenda" class="nav-a">AGENDA</a>
                </li>
                <li class="nav-li">
                    <a href="index.html#sedes" class="nav-a">SEDES</a>
                </li>
                <li class="nav-li">
                    <a href="index.html#contactos" class="nav-a">CONTACTOS</a>
                </li>
            </ul>


        </div>

        <div class="in">
            <a class="ini" href="inscripciones.php"> INSCRIBETE YA</a>
        </div>
    </nav>

    <div class="cuadro-formulario">
        <?php
        require("formulario.php");
       
        
        
    
        ?>
    </div>

</body>

<div class="redes">

    <a href="">
        <img class="img" src="imagenes/faceMenu.jpg" alt="">
    </a>
    <a href="">
        <img class="img" src="imagenes/instagramMenu.jpg" alt="">
    </a>
    <a href="">
        <img class="img" src="imagenes/twitterMenu.jpg" alt="">
    </a>
    <a href="https://blended.com.ar/login">
        <img class="img" src="imagenes/blendedMenu.jpg" alt="">
    </a>
    <a href="https://api.whatsapp.com/send?phone=0123456789">
        <img class="img" src="imagenes/wsMenu.jpg" alt="">
    </a>

</div>
<script src="preguntar.js"></script>
<script src="script.js"></script>


</html>