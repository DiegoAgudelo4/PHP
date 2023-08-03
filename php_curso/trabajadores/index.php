<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquical</title>
</head>

<body>
<fieldset align ="center">

        <legend><strong>Trabajadores</strong></legend>
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
echo "<p align='center'>";
if (!$conexion) {
    echo "No se ha podido conectar, verifique sus datos";
} else {
    echo "Conexion exitosa";
}
echo "</p>";

$queryClientes = "SELECT * FROM `trabajadores`;";
$resultado = mysqli_query($conexion, $queryClientes);
echo "<table border=1 bordercolor='blue' align='center'>"; // Inico Tabla en  HTML bordercolor="#00CC66"
echo "<tr>" . "<th>IDENTIFICACION </th>
        <th>" . "NOMBRE</th>
        <th>" . "APELLIDO </th>
        <th>" . "TELEFONO </th>
        <th>" . "DIRECCION </th>
        <th>" . "CORREO </th>
        </tr>";
while ($row = mysqli_fetch_array($resultado)) {

    echo "<tr><td>" . $row['identificador_emp']. "</td>";
    echo "<td>" . $row['nombre_emp']. "</td>";
    echo "<td>" . $row['apellido_emp']. "</td>";
    echo "<td>" . $row['telefono_emp']. "</td>";
    echo "<td>" . $row['direccion_emp']. "</td>";
    echo "<td>" . $row['correo_emp']. "</td></tr>";
}
echo "</table>";
$numero = mysqli_num_rows($resultado);
echo "<p align='center'><strong> numero de registros: $numero </strong>";

mysqli_close($conexion);

if ($conexion) {
    echo "<br>Conexion cerrada </p>";
}
?>

</html>