<<<<<<< HEAD:inscripciones.php
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


=======
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
            <a class="ini" href="inscripciones.html"> INSCRIBETE YA</a>
        </div>
    </nav>

    <div class="cuadro-formulario">
        <div class="formulario-inscripcion">

            <img src="imagenes/logo_tramsparente.png" alt="">

            <form class="form" class="bounceInLeft">

                <label class="nombre">Nombre</label>
                <input type="text" placeholder="Nombre" required>
                <label class="nombre">Apellido</label>
                <input type="text" placeholder="Apellido" required>
                <div class="form-int">
                    <div>
                        <label class="nombre">DNI</label>
                        <input class="dni" type="number" placeholder="12345678" required>
                    </div>

                    <div>
                        <label class="nombre">Dirección</label>
                        <input type="text" placeholder="Calle 123 piso 1-D " required>
                    </div>
                </div>
                <div class="form-int">

                    <div>
                        <label class="nombre">Edad</label>
                        <input class="edad" type="number" placeholder="Edad" min="5" max="120" step="1" id="n1" name="age" pattern="\d+" required>
                    </div>

                    <div>
                        <label class="nombre">Telefono</label>
                        <input type="tel" placeholder="01112341234" required>
                    </div>

                    <div>
                        <label class="nivel">Nivel 1</label>
                        <input type="radio" name="nivel" value="nivel_1">
                    </div>

                    <div>
                        <label class="nivel">Nivel 2</label>
                        <input type="radio" name="nivel" value="nivel_2">
                    </div>

                    <div>
                        <label class="nivel">Nivel 3</label>
                        <input type="radio" name="nivel" value="nivel_3"> </div>

                </div>
                <label class="nombre">Correo:</label>
                <input type="email" placeholder="Correo@mail.com" required>

                <button>Siguiente</button>

            </form>

        </div>
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
<script src="script.js"></script>

>>>>>>> 359d67ca3d5635406768a71637c20d6c5babb270:inscripciones.html
</html>