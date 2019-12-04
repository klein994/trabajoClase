

<div class="cuadro-alerta">

<div class="listado">
		
			<?php
				// 1. Me conecto a la BD
				include("../conexion.php");
				
				// 2. Genero la query (SELECT)
				$ver = "SELECT * FROM usuarios";
				
				// 3. Ejecutamos la query
				$ej = mysqli_query($conexion, $ver);
				
				// 4. Pregunto si NO funcionó
				if($ej === false){
					echo "error, ver SQL";
				} else {
				// 5. Muestro datos
		while($reg = mysqli_fetch_array($ej)){
			?>
			<a href="#" class="listado-libro">
				<h2><?php echo $reg['nombre']; ?>
					-					
                        <?php echo $reg['apellido']; ?>
                        -
                        <?php echo $reg['dni']; ?>
                        -
                        <?php echo $reg['direccion']; ?>
                        -
                        <?php echo $reg['edad']; ?>
                        -
                        <?php echo $reg['telefono']; ?>
                        -
                        <?php echo $reg['sede']; ?>
                        -
						<?php echo $reg['email']; ?>
						
			</h2>
				
				
			</a>
			<?php
		} // Cierra while
				} // Cierra else de todo ok
			?>
			
        </div>
            