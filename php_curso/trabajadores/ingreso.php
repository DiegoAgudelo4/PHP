<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingresar</title>
</head>

<body>
    <fieldset align="center">

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
<form method="post" action="">



    <fieldset align="center">

        <legend><strong> Ingresar Datos</strong></legend>

        <p>

            <label>

                <input type="text" name="cedula" placeholder="Número de identificación:" />

            </label>

        </p>
        <p>
            <label>
                <input type="text" name="nombre" placeholder="Nombres:" />
            </label>
        </p>
        <p>
            <label>
                <input type="text" name="apellido" placeholder="Apellidos:" />
            </label>
        </p>
        <p>
            <label>
                <input type="text" name="telefono" placeholder="Teléfono:" />
            </label>
        </p>
        <p>
            <label>
                <input type="text" name="correo" placeholder="Correo Electrónico:" />
            </label>
        </p>
        <p>
            <label>
                <input type="text" name="direccion" placeholder="Dirección" />
            </label>
        </p>


        <p>
            <input type="submit" value="Enviar" />

        </p>

    </fieldset>

</form>
<?php
//Validamos que hayan llegado estas variables, y que no esten vacias:

if (
    isset($_POST["cedula"],
    $_POST["nombre"],
    $_POST["apellido"],
    $_POST["correo"],
    $_POST["direccion"],
    $_POST["telefono"],
    )
) {
    //traspasamos a variables locales, para evitar complicaciones con las comillas:
    $ced = $_POST["cedula"];
    $nom = $_POST["nombre"];
    $apel = $_POST["apellido"];
    $tel = $_POST["telefono"];
    $dir = $_POST["direccion"];
    $cor = $_POST["correo"];
    //Preparamos la orden SQL
    $consulta = "INSERT INTO trabajadores (identificador_emp,nombre_emp,apellido_emp,telefono_emp,direccion_emp,correo_emp) VALUES ('$ced','$nom','$apel','$tel','$dir','$cor')";
    if (mysqli_query($conexion, $consulta)) {
        echo "<p align='center'>Registro agregado.👍</p>";
    } else {
        echo "<p align='center'>No se agregó... 👎</p>";
    }
}
mysqli_close($conexion);
?>
</body>

</html>