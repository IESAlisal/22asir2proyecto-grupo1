<!DOCTYPE html>
<html>
<head>
	<title>Actualizar libros</title>
	<link rel="stylesheet" media="screen" href="css/estilo.css" >
</head>
<style>
	#actualizar {
			margin: auto;
			align-items: center;
			color: white;
			border: 2px solid black;
			width: 110px; /* Para que no se rompa en dos líneas, y lo translade tal cual. */
			margin-left: 50%;
			transform: translateX(-50%);
	}
</style>
<body>

	<?php
	   ini_set("display_errors",true);
		require_once 'funcionesBaseDatos.php';
		if(isset($_POST["actualizar"]))
		{
		    $librosprecios = $_POST["librosprecios"];
			$precio = $_POST["precio"];
			modificarLibroMySQLi($librosprecios, $precio);
			echo "<div class='aviso'>Precio del libro actualizado</div><br>";
		}

	?>

	<form class="formulario" action="" method="post" name="formulario">
	    <ul>
		    <li>
		         <h2>SELECCIONE EL LIBRO A ACTUALIZAR</h2>
		         <span class="mensaje_obligatorio">* Campo obligatorio</span>
		    </li>

		    <li>
		        <label for="libro">Libros:*</label>
		        <select name="libro">
		            <?php
						$libros = getLibrosTitulo();
						foreach ($libros as $libro) 
						{
						    echo "<option value='$libro'";

						    if (isset($_POST['libro']) && $libro == $_POST['libro'])
                        	    echo " selected='true'";

						    echo ">$libro</option>";
						}
		    		?>
		        </select>
		    </li>

		    <li>
		        <button id="mostrar" class="submit" type="submit" name="mostrar">Mostrar</button>
		    </li>
		</ul>
	</form>

		<?php
		    if (isset($_POST['mostrar'])) 
		    {
		?>
		<form id="actualizarPrecio" method="post" action="">
		<br>
		<table class="tabla">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Precio</th>
			</tr>
		</thead>
		<tbody>
			<?php

		        $libro = $_POST['libro'];
		        $librosprecios = getLibrosPrecio($libro);
		        foreach ($librosprecios as $libroprecio)
		        {
		        	echo "<input type='hidden' name='libro' value='{$_POST['libro']}'>";
		        	echo "<tr>"."<input type='hidden' name='librosprecios[]' value='{$libroprecio['numero_ejemplar']}'>";
		        	echo "<td>".$libroprecio["titulo"]."</td>";
		        	echo "<td><input type='text' size='4' name='precio[]' value='{$libroprecio['precio']}'> Euros </td></tr>";
		        }
			?>
		</tbody>
	</table>
	<br>
		<button id="actualizar" class="submit actualizar" type="submit" name="actualizar">Actualizar</button>
	</form>

		<?php
		    }
		?>		
		<br>
	<a href="index.php">Volver</a>

</body>
</html>
