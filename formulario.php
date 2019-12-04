
<div class="formulario-inscripcion">

            <img src="imagenes/logo_tramsparente.png" alt="">

            <form class="form" class="bounceInLeft" method="post" action="inscripcion_pr.php">

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

                <label for="email" class="nombre">Correo:<div id="respuesta"></div> </label>
                <input type="email" placeholder="Correo@mail.com" required id="email" name="email">

                <label for="clave" class="nombre">Contraseña</label>                
                <input type="password" placeholder="" required id="clave" name="clave">

                <input class="button"  id="siguiente" type="submit" value="siguiente" />
                <div id="bloqueo" ></div>
            </form>
            
        </div>
