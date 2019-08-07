<?php

include '../conexion/conexion.php';

?>

<html>
<head>
    <title></title>
</head>
<body>
<form action="guardar.php" method="post">
    <label>Nombre Completo</label>
    <p></p>
    <input type="text" name="nombre completo">
    <p></p>
    <label>Correo</label>
    <p></p>
    <input type="email" name="correo">
    <p></p>
    <label>clase</label>
    <p></p>
    <select name="codigo_curso">
        <?php
        $sql="SELECT * FROM curso";
        $registro=mysqli_query($conexion,$sql);
        while ($reg=mysqli_fetch_array($registro))
        {
            echo "<option value=\"$reg[codigo_curso]\">$reg[nombre_curso]</option>";
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
