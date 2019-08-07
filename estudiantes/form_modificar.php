<?php

include"../conexion/conexion.php";

$idalumnos=$_REQUEST['idalumnos'];

$sql="SELECT * FROM alumno WHERE idalumnos='$idalumnos'";
$registro=mysqli_query($conexion, $sql);
$row=mysqli_fetch_array($registro);

?>

<html>
<head>
    <title></title>
</head>
<body>
<form action="modificar.php" method="post">
    <input type="hidden" name="idalumnos" value="<?php echo $row['idalumnos'] ?>">
    <label>Nombre Completo</label>
    <p></p>
    <input type="text" name="nombre completo" value="<?php echo $row['nombre_completo']; ?>">
    <p></p>
    <label>Correo</label>
    <p></p>
    <input type="email" name="correo" value="<?php echo $row['correo']; ?>">
    <p></p>
    <label>Clase</label>
    <p></p>
    <select name="codigo_curso">
    <?php
        $sql="SELECT * FROM curso";
        $registro=mysqli_query($conexion,$sql);
        while ($reg=mysqli_fetch_array($registro)) {
            if ($row['codigo_curso'] == $reg['codigo_curso']) {


                ?>
                <option selected value="<?php echo $reg['codigo_curso'] ?>"><?php echo $reg['nombre_curso'] ?></option>
                <?php
            } else {
                ?>
                <option value="<?php echo $reg['codigo_curso'] ?>"><?php echo $reg['nombre_curso'] ?></option>
                <?php
            }
        }
                ?>
    </select>
    <p></p>
    <button type="submit" name="guardar">Guardar</button>
    <p></p>
    <button><a href="../index.php">Regresar</a></button>
</form>
</body>
</html>
