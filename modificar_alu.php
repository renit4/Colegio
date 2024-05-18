<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modificar.css">
    <title>Modificar</title>
</head>
<body>
    <?php
    include("conexion.php");
        $id= $_GET["ida"];

        echo "id alumno: ".$id;
        $sql= " SELECT * FROM alumno 
                WHERE id_alumno=".$id;
        
        $res= mysqli_query($con,$sql);
        $vec= mysqli_fetch_array($res);
    ?>
    <h1><center>Modificar alumno</center></h1>
    <br>
    <br>
    <form action="procesar_mod_alu.php" method="post">
        <table align="center" border="5" cellpadding="30" cellspacing="1">
            <tr>
                <td>id alumno:</td>
                <td><input type="number" name="ida" id="ida" readonly value="<?php echo$vec[0] ?>" ></td>
            </tr>
        <tr>
            <td>dni</td>
            <td><input type="number" name="dni" id="dni" value="<?php echo$vec[1] ?>" ></td>
        </tr>
        <tr>
            <td>fecha nac</td>
            <td><input type="date" name="fnac" id="fnac" value="<?php echo$vec[2] ?>"></td>
        </tr>
        <tr>
            <td>apellido y nombre:</td>
            <td><input type="text" name="nom" id="nom" value="<?php echo$vec[3] ?>"></td>
        </tr>
        <tr>
            <td>ciudad:</td>
            <td><input type="text"  name="ciu" id="ciu" value="<?php echo$vec[4] ?>"  ></td>
        </tr>
        <tr>
            <td>domicilio</td>
            <td><input type="text" name="domicilio" id="domicilio" value="<?php echo$vec[5] ?>"></td>
        </tr>
        <tr>
            <td>mail</td>
            <td><input type="text" name="mail" id="mail" value="<?php echo$vec[6] ?>"></td>
        </tr>
        <tr>
            <td>genero</td>
            <td><input type="text" name="gen" id="gen" value="<?php echo$vec[7] ?>"></td>
        <tr>
            <td>telefono</td>
            <td><input type="text" name="tel" id="tel" value="<?php echo$vec[8] ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">enviar</button></td>
        </tr>
        </tr>
        </table>
    </form>
    <br>
    <br>
    <br>
    <br>
</body>
</html>