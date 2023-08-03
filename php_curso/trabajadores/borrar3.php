<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>borrar 3</title>
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
    <fieldset align="center">
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
        $ide = $_POST["cedula"];

        //echo $ide;
        $consulta = "DELETE FROM trabajadores WHERE identificador_emp='$ide'";
        if (mysqli_query($conexion, $consulta)) {
            echo "<legend><strong> Borrar trabajador</strong></legend>
            <p>El registro ha sido borrado con exito.😀</p>";
            return;
        }
            echo "<legend><strong> Borrar Cliente</strong></legend>
            <p>El registro no se ha podido borrar. 😔</p>";
        
        ?>
    </fieldset>

</body>

</html>