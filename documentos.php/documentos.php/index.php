<?php
include_once 'funcionesBaseDatos.php';
session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null){
    header("Location: index.php");
}

?>
<html>
    <head>
        <title>Aplicacion de Gestion de libros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estiloregistro.css">
	<title>Main page g1</title>
	<style>
            body{
               text-align:center;
            }
            #menu{
                display:inline-block;
                text-align:left;
            }
	    #instancia {
		position: absolute;
                bottom: 0px;
		align-items: center;
	    }
        </style>
    </head>
    <body>
<br>
    <form>
        <h1>Bienvenido a la aplicación de libros</h1>
        <div id="menu">
            <ul>
	        <li><a href="libros_insertar.php">Insertar libros</a></li>
                <li><a href="libros_actualizar.php">Actualizar libros</a></li>
                <li><a href="libros_borrar.php">Borrar libros</a></li>
		<li><a href="curriculum.pdf">Descargar curriculum editable</a></li>
		<li><a href="enviarcv.php">Enviar curriculum</a></li>
            </ul>
        </div>
        <form action='logoff.php' method='post'>
	                  <input type='submit' name='desconectar' class="btn btn-warning" value='Desconectar usuario <?php echo
	               		 $_SESSION['usuario'];
			    ?>'/>
        </form>
    </form>
	<div id="instancia">
 		<?php 
	        $instance_id = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
	        echo "<br><br><br><br><br>El id de la máquina host es <b>$instance_id</b>";
		?>
	</div>
    </body>
</html>
