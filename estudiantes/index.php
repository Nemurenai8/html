<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 24/7/2019
 * Time: 19:42
 */
include '../conexion/conexion.php';
$query='select * from alumno';
$registros=mysqli_query($conexion,$query);
?>
<html>
<head>
    <title>

    </title>
</head>
<body>
<button><a href="../estudiantes/form_ingresar.php">Ingresar</a></button>
<table align="center" border="1">
    <thead>
    <tr>
        <td rowspan="2">Codigo Alumno</td>
        <td rowspan="2">Nombre Completo</td>
        <td rowspan="2">Correo</td>
        <td rowspan="2">Clase</td>
        <td colspan="2" style="text-align: center">Acciones</td>
    </tr>
    <tr>
        <td >Modificar</td>
        <td>Eliminar</td>
    </tr>
    </thead>
    <tbody>
    <?php
    while($row=mysqli_fetch_array($registros))
    {
        ?>
        <tr>
            <td><?php echo $row['id_alumno'];?></td>
            <td><?php echo $row['nombre_completo'];?></td>
            <td><?php echo $row['correo'];?></td>
            <td><?php
                switch ($row['codigo_curso'])
                {
                    case 1:echo"PHP";
                        break;
                    case 2:echo"ASP";
                        break;
                    case 3:echo"Java Script";
                        break;
                }
                ?>
            </td>
            <td>
                <a title="Modificar" href="form_modificar.php?id_alumno=<?php echo $row['id_alumno']; ?>">
                    <img src="../img/modificar.png" width="30" height="30">
                </a>
            </td>
            <td>
                <a>
                    <img src="../img/eliminar.png" width="30" height="30">
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>
