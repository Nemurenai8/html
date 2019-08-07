<?php
include '../conexion/conexion.php';

$idalumnos=$_REQUEST['$idalumnos'];
$nombre_completo=$_REQUEST['$nombre_completo'];
$correo=$_REQUEST['$correo'];
$codigo_curso=$_REQUEST['$codigo_curso'];

$sqlModificar="UPDATE alumno SET nombre_completo='$nombre_completo', correo='$correo', codigo_curso='$codigo_curso' WHERE idalumnos=$idalumnos";
$resultado=mysqli_query($conexion, $sqlModificar);

if ($resultado)
{
    echo"<h1>Registro Modificado</h1>";
}
else
{
    echo"<h1>Problema al Modificar</h1>";
}
?>
<a ></a>