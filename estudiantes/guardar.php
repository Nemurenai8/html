<?php

include"../conexion/conexion.php";

$nombre_completo=$_REQUEST['nombre_completo'];
$correo=$_REQUEST['correo'];
$codigo_curso=$_REQUEST['codigo_curso'];

$sql="insert into alumno(nombre_completo,correo,codigo_curso) values('$nombre_completo','$correo',$codigo_curso)";

$resultado=mysqli_query($conexion,$sql) or die("problemas en el select".mysqli_error($conexion));
if ($resultado){
    echo '<h2>registro guardado exitoso </h2>';
}else{
    echo '<h2>problemas al guardar</h2>';
}
?>

<button><a href="form_ingresar.php">regresar</a></button>

