<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar 2</title>
</head>

<body>
<fieldset align ="center">

<legend><strong>TRABAJADORES</strong></legend>
    <table border=0 bordercolor='blue' align='center'>
        <tr>
            <td width='15%'><a href="index.php">Todos</a> </td>
            <td width='15%'><a href="consulta.php">Consulta</a> </td>
            <td width='15%'><a href="ingreso.php">Ingreso</a> </td>
            <td width='15%'><a href="actualizar1.php">Actualizar</a> </td>
            <td width='15%'><a href="borrar1.php">Borrar</a> </td>
        </tr>
    </table>

</fieldset>
</body>
    <?php
    $nombre_servidor = "localhost";
    $nombre_BD = "maquical";
    $nombre_usuario = "root";
    $contrasena = "1234";
    $conexion = mysqli_connect($nombre_servidor, $nombre_usuario, $contrasena, $nombre_BD);
    if (!$conexion) {
        echo "No se ha podido conectar, verifique sus datos";
    } else {

        echo "Conexión exitosa <br>";
    }
    ?>

    <?php
    echo $_GET["ide"];
    $ide = $_GET["ide"];
    $consulta = "select * from trabajadores where identificador_emp like '%$ide%' ";
    if ($resultado = mysqli_query($conexion, $consulta)) {
        $row = mysqli_fetch_array($resultado);
        echo "<div align='center'>
        <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>
            <tr>
                <td colspan='2'><h3 align='center'>Actualice los datos que considere</h3></td>
            </tr>
            <tr>
                <td colspan='2'>En los campos del formulario puede ver los valores actuales,
                si no se cambian los valores se mantienen iguales.</td>
            </tr>
            <form method='POST' action='actualizar3.php'>
                <tr>
                    <td width='50%'>&nbsp;</td>
                    <td width='50%'>&nbsp;</td>
                </tr>
                <tr>
                    <td width='50%'><p align='center'><b>Cédula</b></td>
                    <td width='50%'><p align='center'><input type='text' name='cedula' size='20' value='$ide' disabled='disabled'></td>
                </tr>
                <tr>
                    <td width='50%'><p align='center'><b>Nombres</b></td>
                    <td width='50%'><p align='center'><input type='text' name='nombre' size='20' value='" . $row['nombre_emp'] . "'></td>
                </tr>
                <tr>
                    <td width='50%'><p align='center'><b>Apellidos</b></td>
                    <td width='50%'><p align='center'><input type='text' name='apellido' size='20' value='" . $row['apellido_emp'] . "'></td>
                </tr>
                <tr>
                    <td width='50%'><p align='center'><b>Correo</b></td>
                    <td width='50%'><p align='center'><input type='text' name='correo' size='20' value='" . $row['correo_emp'] . "'></td>
                </tr>
                <tr>
                    <td width='50%'><p align='center'><b>Direccion</b></td>
                    <td width='50%'><p align='center'><input type='text' name='direccion' size='20' value='" . $row['direccion_emp'] . "'></td>
                </tr>
                <tr>
                    <td width='50%'><p align='center'><b>Telefono</b></td>
                    <td width='50%'><p align='center'><input type='text' name='telefono' size='20' value='" . $row['telefono_emp'] . "'></td>
                </tr>
                <tr>
                    <td width='50%'>&nbsp;</td>
                    <td width='50%'>&nbsp;</td>
                </tr>
                <input type='hidden' name='cedula' value='$ide'>
                <tr>
                    <td width='100%' colspan='2'>
                    <p align='center'>
                    <input type='submit' value='Actualizar datos' name='B1'></td>
                </tr>
            </form>
        </table>
    </div>";
    }
    ?>
</body>
</html>