<?php
include "include/header.php";
?>
<button><a href="estudiantes/form_ingresar.php">Ingresar</a></button>
<div align="center">
    <form action="index.php" method="get">
        <label>Buscar:</label>
        <input type="text" name="buscar">
        <button tipy="submit">Buscar</button>
    </form>
</div>
<div class="container">
    <table align="center" border="1" class="table-hover">
        <thead>
            <tr>
                <td rowspan="2">Codigo Alumno</td>
                <td rowspan="2">Nombre Completo</td>
                <td rowspan="2">Correo</td>
                <td rowspan="2">Clase</td>
                <td colspan="2" style="text-align: center">Acciones</td>
            </tr>
            <tr>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row=mysqli_fetch_array($registros)) {
                ?>
                <tr>
                    <td><?php echo $row['idalumnos']; ?></td>
                    <td><?php echo $row['nombre_completo']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php
                        switch ($row['codigo_curso']) {
                            case 1:
                                echo "PHP";
                                break;
                            case 2:
                                echo "ASP";
                                break;
                            case 3:
                                echo "Java Script";
                                break;
                        }
                        ?></td>
                    <td>
                        <a title="Modificar"
                           href="estudiantes/form_modificar.php?idalumnos=<?php echo $row['idalumnos']; ?>">
                            <img src="img/263062.png" width="30" height="30">
                        </a>
                    </td>
                    <td>
                        <a title="Eliminar"
                           href="estudiantes/eliminar.php?idalumnos=<?php echo $row['idalumnos']; ?>">
                            <img src="img/88666.png" width="30" height="30">
                        </a>
                    </td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
</div>
<?php
include "include/footer.php";
?>