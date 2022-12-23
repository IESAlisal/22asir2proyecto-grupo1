<!DOCTYPE html>
<html>
<head>
	<title>Curriculums</title>
	<link rel="stylesheet" media="screen" href="css/estilo.css" >
</head>
<style>
formulario .h2 {
text-align: center;
margin: auto;
}
</style>
<body>
	<form class="formulario" method="post" action="curriculums_guardar.php" name="formulario" enctype="multipart/form-data">
		<ul>
		    <li class="h2">
		         <h2>ENVIE SU CURRICULUM</h2>
		         <span class="mensaje_obligatorio">* Campo obligatorio</span>
		    </li>
		    <li>
		        <label for="titulo">Inserte su correo electrónico:*</label>
		        <input type="email" name="titulo" required>
		    </li>
		    <li>
		        <label for="adquisicion">Adjunte su curriculum:*</label>
		        <input class="curriculum" type="file" name="adjunto" accept=".pdf" required>
		    </li>

		    <li>
		    	<button class="submit" type="submit" name="guardar">Enviar</button>
		    </li>

		</ul>
	</form>

	</br>
	<a href="index.php">Volver</a>
</body>
</html>




