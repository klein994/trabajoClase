
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
                    <a href="index.php" class="nav-a">INICIO</a>
                </li>
                <li class="nav-li">
                    <a href="index.php#nosotros" class="nav-a">NOSOTROS</a>
                </li>
                <li class="nav-li">
                    <a href="index.php#curso" class="nav-a">CURSOS</a>
                </li>
                <li class="nav-li">
                    <a href="index.php#agenda" class="nav-a">AGENDA</a>
                </li>
                <li class="nav-li">
                    <a href="index.php#sedes" class="nav-a">SEDES</a>
                </li>
                <li class="nav-li">
                    <a href="index.php#contactos" class="nav-a">CONTACTOS</a>
                </li>
            </ul>


        </div>

        <div class="in">
            <a class="ini" href="inscripciones.php"> INSCRIBETE YA</a>
        </div>
    </nav>

    <div class="cuadro-formulario">
    <div class="formulario-inscripcion">
<div class="cuadro-alerta">
<img src="imagenes/logo_tramsparente.png" alt="">

<h1>English Owl Institute</h1>
<img src="https://cdn.pixabay.com/photo/2017/03/28/01/46/check-mark-2180770_960_720.png"style="width:50px;">

<h2>¡Verifica tu mail!</h2>
        <p>El equipo de English Owl Institute te ha enviado un mail para que puedas continuar con el proceso de inscripcion, si no logras ver el mail, recuerda revisar la bandea de spam. </p>
        <p>Ademas en la brevedad un representante de nuestro equipo se contactará con usted para ampliar la información que necesites. </p>
        

        <form action="index.php">
        <input class="button"  id="siguiente" type="submit" value="siguiente" />
        </form> 
</div>
    </div>
</div>
</body>

<div class="redes" class="fadeInLeft">

    <a href="">
        <img class="img" src="imagenes/faceMenu.jpg" alt="Ir a Faceboock">
    </a>
    <a href="">
        <img class="img" src="imagenes/instagramMenu.jpg" alt="Ir a Instagram">
    </a>
    <a href="">
        <img class="img" src="imagenes/twitterMenu.jpg" alt="Ir a Twitter">
    </a>
    <a href="https://blended.com.ar/login">
        <img class="img" src="imagenes/blendedMenu.jpg" alt=" Ir a Blended">
    </a>
    <a href="https://api.whatsapp.com/send?phone=0123456789">
        <img class="img" src="imagenes/wsMenu.jpg" alt="Escribir a Whatsapp">
    </a>

</div>

<script src="script.js"></script>


</html>