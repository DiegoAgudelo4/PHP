<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Actualizar 1</title>

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
$nombre_servidor="localhost";
$nombre_BD="maquical";
$nombre_usuario="root";
$contrasena="1234";
$conexion = mysqli_connect($nombre_servidor, $nombre_usuario, $contrasena, $nombre_BD);

 

if(!$conexion){

    echo "No se ha podido conectar, verifique sus datos";

} else{

    echo "Conexión exitosa <br>";

}

 

?>

 

 

<form method="POST" action="">

 

<fieldset align = "center">

    <legend><strong>CONSULTAR DATO DEL TRABAJADOR A ACTUALIZAR</strong></legend>
    <p>Digite el número de identificación del trabajador</p>
    <p><input type="text" name="cedula" size="15"></p>
    <input type="submit" value="Consultar dato">
</fieldset>
</form>
<?php
if(isset($_POST["cedula"])){
    $ced = $_POST["cedula"];
    $consulta = "select * from trabajadores where identificador_emp like '%$ced%' ";
    if($resultado = mysqli_query($conexion, $consulta)){
        echo "<table border=1 bordercolor='blue' align='center'>";
        echo "<tr>  <td>" . "IDENTIFICACION </td>
                    <td>" . "NOMBRE </td>
                    <td>" . "APELLIDO </td>
                    <td>" . "TELEFONO </td>
                    <td>" . "DIRECCION </td>
                    <td>" . "CORREO </td>
                    <td>" . "ACTUALIZAR </td>
                </tr>";
        while($row = mysqli_fetch_array($resultado)){  

            echo "<tr>  <td>" . $row['identificador_emp'] . "</td>
                        <td>" . $row['nombre_emp'] . "</td>
                        <td>" . $row['apellido_emp'] . "</td>
                        <td>" . $row['telefono_emp'] . "</td>
                        <td>" . $row['direccion_emp'] . "</td>
                        <td>" . $row['correo_emp'] . "</td>
                        <td>" . '<a href="actualizar2.php?ide='. $row['identificador_emp'] . '">Actualizar</a>' . "</td>
                    </tr>";
        }
            echo "</table>";
            $numero = mysqli_num_rows($resultado);
            echo "<p align='center'><strong>Número de registros: $numero </strong>";
            echo "<br> numero de registros: $numero";
            mysqli_close($conexion);
    }
}