<?php

include '../conexion/conexion.php';

$idalimnos=$_REQUEST['idalumnos'];

$sqlElimninar="DELETE FROM alumno WHERE idalumnos=$idalimnos";

$resultado=mysqli_query($conexion, $sqlElimninar);

if($resultado)
{
    echo"<h1>El registro se ha eliminado</h1>";
}
else
{
    echo"<h1>El registro no se ha eliminado</h1>";
}

echo"<a href='index.php'>Regresar</a>";

?>