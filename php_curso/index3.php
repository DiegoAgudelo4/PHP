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
        $variable="icon_logo";
        echo "<p style= 'text-align:center;'><img src='$variable.png'>";
    }
    
    ?>
</body>

</html>