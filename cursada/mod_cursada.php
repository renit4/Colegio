<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar cursada</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
</head>
<body  class="p-3 text-primary-emphasis bg-primary-subtle border-primary-subtle ">
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
    <?php
    include("../conexion.php");

    $id_a= $_GET["ida"];
    $id_m= $_GET["idm"];

    $sql= "SELECT * FROM cursada
            WHERE id_alumno=$id_a
            AND id_materia=$id_m";

    $res= mysqli_query($con,$sql);
    $vec= mysqli_fetch_array($res);
?>

<h1><center>Modificar cursada</center></h1>
<center><a href="../index.html">Menu</a></center>
<br>
<br>
<form action="proc_mod_cur.php" method="post">
    <table  class="table table-bordered w-50" align="center" border="5" cellpadding="30" cellspacing="1">
        <tr>
            <td>id alumno:</td>
            <td><input type="number" id="ida" name="ida" readonly value="<?php echo$vec[0] ?>"></td>
        </tr>
        <tr>
            <td>id materia:</td>
            <td><input type="number" id="idm" name="idm"  readonly value="<?php echo$vec[1] ?>"></td>
        </tr>
        <tr>
            <td>nota 1</td>
            <td><input type="number" id="n1" name="n1" min="1" max="10" value="<?php echo$vec[2] ?>"></td>
        </tr>
        <tr>
            <td>nota 2</td>
            <td><input type="number" id="n2" name="n2" min="1" max="10" value="<?php echo$vec[3] ?>"></td>
        </tr>
        <tr>
            <td>asistencia</td>
            <td><input type="number" id="as" name="as" min="1" max="100" value="<?php echo$vec[4] ?>"></td>
        </tr>
        <tr>
            <td>estado</td>
            <td><input type="text" id="est" name="est" ></td>
        </tr>
        <tr><td colspan="2"><center><button type="submit">enviar</button></center></td></tr>

    </table>
</form>


</body>
</html>

