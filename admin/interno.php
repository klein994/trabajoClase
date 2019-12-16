<?php
	include("funciones.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <title>Hola <?php 
			echo nombre($_SESSION['ad']); 
		?>!</title>
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
            <a class="ini" href="salir.php"> SALIR</a>
        </div>
		</nav>

<div class="fondo">


<section id="nosotros" class="nosotros">
        <h1>Admin</h1>
        <div class="contenedor-nosotros">
            <div class="nosotros-item">

                <div class="cuadro-text wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="../imagenes/logo_tramsparente.png" alt="">


                    <h2>English Owl Institute</h2>
                    <p>En el siguiente formulario podrás añadir un nuevo administrador para editar este sitio.</p>
                    <p>!!Ten cuidado a quien le des acceso!!.</p>
                     </div>


                <div class="cuadro2 wow fadeInLeft" data-wow-delay="0.4s">
<div class="centrar"></div>
                   <?php
	include("nuevo_superuser.php");
?>
                </div>
            </div>
        </div>
    </section>






<section id="nosotros" class="nosotros">
        <h1>Alumnos</h1>
        <div class="contenedor-nosotros">
            <div class="nosotros-item">

                <div class="cuadro-text wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="../imagenes/logo_tramsparente.png" alt="">

                    <div class="cuadro-alerta">
<div class="centrar">



		
	
         
                   <h2>Buscar por</h2>
                   <div class="buscar">
                     <select class="op" type="text" id="op">
                            <option value="1">Nombre</option>
                            <option value="2">Apellido</option>
                            <option value="3">DNI</option>
                        </select>                    
                <input type="search" name="termino" placeholder="Buscar" name="buscar" id="buscar" onkeyup="myFunction()">		
		    </div>
</div>
</div>			
                </div>
                <div class="cuadro2 wow fadeInLeft" data-wow-delay="0.4s">
                   <?php include("mostrar_datos.php");?>
                </div>
            </div>
        </div>
    </section>    
    <script>
function myFunction() {
    // declaro variable
  var input, filter, table, tr, td, i, txtValue, option;
  opt = document.getElementById("op").value;
 
  input = document.getElementById("buscar");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabla");
  tr = table.getElementsByTagName("tr");
  console.log(opt);

// recorro las filas y oculto l q no contiene la busqueda

  for (i = 0; i < tr.length; i++) {
    
    td = tr[i].getElementsByTagName("td")[opt];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
    
      } else {
        tr[i].style.display = "none";
        
      }
    }       
  }
}
</script>



	<section id="nosotros" class="nosotros">
        <h1>cursos</h1>
        <div class="contenedor-nosotros">
            <div class="nosotros-item">

                <div class="cuadro-text wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="../imagenes/logo_tramsparente.png" alt="">


                    <h2>English Owl Institute</h2>
                    <p>El equipo de English Owl Institute está formado por un selecto grupo de profesores capacitados en la metodología de la enseñanza con un denominador común: la pasión por el idioma Ingles.</p>
                </div>


                <div class="cuadro2 wow fadeInLeft" data-wow-delay="0.4s">

                   
                </div>
            </div>
        </div>
	</section>
	



	<section id="nosotros" class="nosotros">
        <h1>Calendario</h1>
        <div class="contenedor-nosotros">
            <div class="nosotros-item">

                <div class="cuadro-text wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="../imagenes/logo_tramsparente.png" alt="">


                    <h2>English Owl Institute</h2>
                    <p>El equipo de English Owl Institute está formado por un selecto grupo de profesores capacitados en la metodología de la enseñanza con un denominador común: la pasión por el idioma Ingles.</p>
                </div>


                <div class="cuadro2 wow fadeInLeft" data-wow-delay="0.4s">

                  
                </div>
            </div>
        </div>
	</section>
	


	<section id="nosotros" class="nosotros">
        <h1>correo</h1>
        <div class="contenedor-nosotros">
            <div class="nosotros-item">

                <div class="cuadro-text wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="../imagenes/logo_tramsparente.png" alt="">


                    <h2>English Owl Institute</h2>
                    <p>El equipo de English Owl Institute está formado por un selecto grupo de profesores capacitados en la metodología de la enseñanza con un denominador común: la pasión por el idioma Ingles.</p>
                </div>


                <div class="cuadro2 wow fadeInLeft" data-wow-delay="0.4s">

                  
                </div>
            </div>
        </div>
    </section>

     
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

<script src="../script.js"></script>


</html>