<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso php</title>
</head>

<body>
    <form name="form1" method="POST">
        <label> numero 1:</label>
        <input type="text" name="num1" id="num1">
        <p>
            <label> numero 2:</label>
            <input type="text" name="num2" id="num2">
        <p>
            <label> numero 3:</label>
            <input type="text" name="num3" id="num3">
        <p>
            <input type="submit" name="boton" id="boton" value="Comparar">
    </form>
    <?php
    if (isset($_POST["boton"])) {
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $n3 = $_POST["num3"];
        echo "Numeros insertados: <br> Numero 1: $n1 <br> Numero 2: $n2 <br> Numero 3: $n3 <p>Respuesta: ";
        if($n1=="" || $n2=="" || $n3==""){
            echo"Existen campos vacíos";
        }else{
            if ($n1 > $n2) {
                if ($n1 > $n3) {
                    echo "El numero mayor es el 1";
                } elseif ($n1 < $n3) {
                    echo "El numero mayor es el 3";
                } else {
                    echo "El numero 1 y el numero 3 son los mayores";
                }
            } elseif ($n2 > $n1) {
                if ($n2 > $n3) {
                    echo "el numero 2 es el mayor";
                }elseif($n2<$n3){
                    echo "El numero 3 es el mayor";
                }else{
                    echo "el numero 2 y el numero 3 son los mayores ";
                }
            }elseif($n1==$n2){
                if($n1==$n3){
                    echo "Todos los numeros son iguales";
                }
                elseif($n1>$n3){
                    echo"En numero 1 y el numero 2 son los mayores ";
                }else{
                    echo "El numero 3 es el mayor";
                }
            }
        }
        
    }
    ?>
</body>

</html>