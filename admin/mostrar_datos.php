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
		if ($ej === false) {
			echo "error, ver SQL";
		} else {
			// 5. Muestro datos

		?>

			<table id="tabla" class="tabla">
				<thead>
					<tr class="head">
						<th>ID</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>DNI</th>
						<th>TELEFONO</th>
						<th>EMAIL</th>


					</tr>
				</thead>


				<?php while ($reg = mysqli_fetch_array($ej)) {
				?>



					<tr id="itd">

						<td><a href="https://klein994.000webhostapp.com/admin/editar.php?id=<?php echo $reg['id'] ?>&nombre=<?php echo $reg['nombre'] ?>&apellido=<?php echo $reg['apellido'] ?>&dni=<?php echo $reg['dni'] ?>&direccion=<?php echo $reg['direccion'] ?>&edad=<?php echo $reg['edad'] ?>&telefono=<?php echo $reg['telefono'] ?>&sede=<?php echo $reg['sede'] ?>&mail=<?php echo $reg['email'] ?>"><?php echo $reg['id'] ?></a></td>
						<td><a href="https://klein994.000webhostapp.com/admin/editar.php?id=<?php echo $reg['id'] ?>&nombre=<?php echo $reg['nombre'] ?>&apellido=<?php echo $reg['apellido'] ?>&dni=<?php echo $reg['dni'] ?>&direccion=<?php echo $reg['direccion'] ?>&edad=<?php echo $reg['edad'] ?>&telefono=<?php echo $reg['telefono'] ?>&sede=<?php echo $reg['sede'] ?>&mail=<?php echo $reg['email'] ?>"><?php echo $reg['nombre'] ?></a></td>
						<td><a href="https://klein994.000webhostapp.com/admin/editar.php?id=<?php echo $reg['id'] ?>&nombre=<?php echo $reg['nombre'] ?>&apellido=<?php echo $reg['apellido'] ?>&dni=<?php echo $reg['dni'] ?>&direccion=<?php echo $reg['direccion'] ?>&edad=<?php echo $reg['edad'] ?>&telefono=<?php echo $reg['telefono'] ?>&sede=<?php echo $reg['sede'] ?>&mail=<?php echo $reg['email'] ?>"><?php echo $reg['apellido'] ?></a></td>
						<td><a href="https://klein994.000webhostapp.com/admin/editar.php?id=<?php echo $reg['id'] ?>&nombre=<?php echo $reg['nombre'] ?>&apellido=<?php echo $reg['apellido'] ?>&dni=<?php echo $reg['dni'] ?>&direccion=<?php echo $reg['direccion'] ?>&edad=<?php echo $reg['edad'] ?>&telefono=<?php echo $reg['telefono'] ?>&sede=<?php echo $reg['sede'] ?>&mail=<?php echo $reg['email'] ?>"><?php echo $reg['dni'] ?></a></td>
						<td><a href="https://klein994.000webhostapp.com/admin/editar.php?id=<?php echo $reg['id'] ?>&nombre=<?php echo $reg['nombre'] ?>&apellido=<?php echo $reg['apellido'] ?>&dni=<?php echo $reg['dni'] ?>&direccion=<?php echo $reg['direccion'] ?>&edad=<?php echo $reg['edad'] ?>&telefono=<?php echo $reg['telefono'] ?>&sede=<?php echo $reg['sede'] ?>&mail=<?php echo $reg['email'] ?>"><?php echo $reg['telefono'] ?></a></td>
						<td><a href="https://klein994.000webhostapp.com/admin/editar.php?id=<?php echo $reg['id'] ?>&nombre=<?php echo $reg['nombre'] ?>&apellido=<?php echo $reg['apellido'] ?>&dni=<?php echo $reg['dni'] ?>&direccion=<?php echo $reg['direccion'] ?>&edad=<?php echo $reg['edad'] ?>&telefono=<?php echo $reg['telefono'] ?>&sede=<?php echo $reg['sede'] ?>&mail=<?php echo $reg['email'] ?>"><?php echo $reg['email'] ?></a></td>

					</tr>






			<?php
				} // Cierra while
			} // Cierra else de todo ok
			?>
			</table>

	</div>