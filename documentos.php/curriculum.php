<!DOCTYPE html>
<html>
<head>
	<title>Libros</title>
	<link rel="stylesheet" media="screen" href="css/estilo.css" >
</head>
<body>
	<a href="var/www/sitiowebgrupo1.nicosri.me/sitiowebgrupo1.nicosri.me/curriculum.pdf">Descargar curriculum rellenable</a>
	<form class="formulario" method="post" action="curriculum_guardar_MySQLi.php" name="formulario">
		<ul>
		    <li>
		         <h2>INSERTE SUS DATOS</h2>
		         <span class="mensaje_obligatorio">* Campo obligatorio</span>
		    </li>
		    <li>
		        <label for="Nombre">Nombre:*</label>
		        <input type="text" name="Nombre" required>
		    </li>
		    <li>
			<label for="Apellidos">Apellidos:*</label>
			<input type="text" name="Apellidos" required>
		    </li>
		    <li>
		        <label for="Fecha de nacimiento">Fecha de nacimiento:*</label>
		        <input type="date" name="Fecha" required>
		    </li>
		    <li>
			<label for="Telefono">Teléfono:*</label>
			<input type="number" name="Telefono" required>
		    </li>
		    <li>
			<label for="Puesto">Puesto:*</label>
			<input type="text" name="Puesto" required>
		    <li>
		        <label for="Especialidad">Especialidad:*</label>
		        <input type="text" name="Especialidad">
		    </li>

		    <li>
		    	<button class="submit" type="submit" name="guardar">Guardar su curriculum</button>
		    </li>

		</ul>
	</form>
	</br>
	<a href="index.php">Volver</a>
</body>
</html>




