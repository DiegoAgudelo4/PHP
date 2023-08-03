<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar 3</title>
</head>

<body>
<fieldset align ="center">

<legend><strong>USUARIOS</strong></legend>
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

        $nom = $_POST["nombre"];
        $ape = $_POST["apellido"];
        $cor = $_POST["correo"];
        $dir = $_POST["direccion"];
        $tel = $_POST["telefono"];
        //echo $ide;
        $consulta = "UPDATE clientes SET nombre_cl='$nom', apellido_cl='$ape', correo_cl='$cor', direccion_cl='$dir', telefono_cl='$tel' WHERE identificador_cl='$ide'";
        if (mysqli_query($conexion, $consulta)) {
            echo "<legend><strong> Actualizar Datos</strong></legend>

            <p>Los datos han sido actualizados con exito.😀</p>";
        }
        ?>
    </fieldset>

</body>

</html>