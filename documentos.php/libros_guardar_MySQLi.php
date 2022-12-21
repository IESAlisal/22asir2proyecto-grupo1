<!DOCTYPE html>
<html>
<head>
	<title>Guardar libros</title>
	<link rel="stylesheet" media="screen" href="css/estiloregistro.css" >
</head>
<style>
body {
background-color: #06DDD0;
}
div {
border: 3px solid white;
border-radius: 15px;
background-color: #cacaca;
margin: auto;
width: 25%;
}
.avisoo {
background-color: #34DD06;
width: 50%;
}
</style>
<body>
<div>

<?php
include_once 'funcionesBaseDatos.php';


function estaVacio($campo, $valor)
{
	$vacio = false;
	if ($valor == "")
    {
        echo("<div class='error'>Falta el campo $campo</div>");
        $vacio = true;
    }
    return $vacio;
}


$todoOK = true;
if (isset($_POST['titulo']))
{

    $titulo = $_POST['titulo'];
    if(!estaVacio("título", $titulo))
    	echo "El título del libro es <b>$titulo</b> <br/>";
    else
    	$todoOK = false;
}

if (isset($_POST['anyo']))
{
    $anyo = $_POST['anyo'];
    if(!estaVacio("año", $anyo))
    	echo "El año de edición es <b>$anyo</b> <br/>";
    else
    	$todoOK = false;
}

if (isset($_POST['precio']))
{
    $precio = $_POST['precio'];
    if(!estaVacio("precio", $precio))
    	echo "El precio del libro es <b>$precio €</b> <br/>";
    else
    	$todoOK = false;
}


if (isset($_POST['adquisicion']))
{
	$adquisicion = $_POST['adquisicion'];
    if(!estaVacio("fecha de adquisición", $adquisicion))
    {
    	list($year, $mon, $day) = explode('-', $adquisicion);

        if (checkdate($mon, $day, $year))
            echo "La fecha de adquisición es <b>$adquisicion</b><br><br/>";
        else
        {
            echo "<div class='error'>Fecha incorrecta<br></div>";
            $todoOK = false;
        }
    }
    else
    	$todoOK = false;

}

if ($todoOK)
{
	if(insertarLibroMySQLi($titulo, $anyo, $precio, $adquisicion))
		echo "<div class='avisoo'>Datos guardados correctamente</div>";
	else
		echo "<div class='error'>No se ha podido insertar</div>";
}


?>
<br>
<a href="libros_MySQLi.php">Volver</a>
</div>
</body>
</html>

