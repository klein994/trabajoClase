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
    <div class="formulario-inscripcion">

            <img src="imagenes/logo_tramsparente.png" alt="">

            <form class="form" class="bounceInLeft" method="post" action="confirm_mail.php">

            <label for="nombre" class="nombre">Nombre</label>
            <input type="text" placeholder="Nombre" required id="nombre" name="nombre">

                
                <label for="apellido" class="nombre">Apellido</label>
                <input type="text" placeholder="Apellido" required id="apellido" name="apellido">

                <div class="form-int">

                    <div class="interno1">
                        <label for="dni" class="nombre">DNI</label>
                        <input type="number" placeholder="12345678" required id="dni" name="dni" >
                    </div>

                    <div class="interno1">
                        <label for="direccion" class="nombre">Dirección</label>
                        <input type="text" placeholder="Calle 123 piso 1-D " required id="direccion" name="direccion">
                    </div>
                </div>

                <div class="form-int2">

                    <div class="interno3">
                        <label for="edad" class="nombre">Fecha de nacimiento</label>
                        <input class="edad" type="date" required id="edad" name="edad">
                    </div>

                    <div class="interno">
                        <label for="telefono" class="nombre">Telefono</label>
                        <input type="tel" placeholder="01112341234" required id="telefono" name="telefono">
                    </div>

                    <div class="interno">
                        <label for="Sede" class="nombre">Sede</label>
                        <select type="text" required id="sede" name="sede">
                            <option value="Belgrano">Belgrano</option>
                            <option value="Barracas">Barracas</option>
                        </select>
                    </div>
                    

                </div>
                <?php  $mail = $_GET['mail']; ?>
                <label for="correo" class="nombre">Correo:<div id="respuesta"></div> </label>
                <input type="email" value="<?php echo base64_decode($mail);?>" required id="correo" name="correo">

                <label for="clave" class="nombre">Contraseña</label>                
                <input type="password" placeholder="" required id="clave" name="clave">

                <input class="button"  id="siguiente" type="submit" value="siguiente" />
                <div id="bloqueo" ></div>
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