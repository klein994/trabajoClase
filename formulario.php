<div class="formulario-inscripcion">

    <img src="imagenes/logo_tramsparente.png" alt="">

    <form class="form" class="bounceInLeft" method="post" action="inscripcion_pr.php">

        <label for="email" class="nombre">Correo:<div id="respuesta"></div> </label>
        <input type="email" placeholder="Correo@mail.com" required id="email" name="email">

        <label for="nombre" class="nombre">Nombre</label>
        <input type="text" placeholder="Nombre" required id="nombre" name="nombre">


        <label for="apellido" class="nombre">Apellido</label>
        <input type="text" placeholder="Apellido" required id="apellido" name="apellido">


        <input class="button" id="siguiente" type="submit" value="siguiente" />
        <div id="bloqueo"></div>
    </form>

</div>