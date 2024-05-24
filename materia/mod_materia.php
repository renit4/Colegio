<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>
<body>
    <?php
        include("../conexion.php");
        $id= $_GET["idm"];
        echo "id materia: ".$id;

        $sql= " SELECT * FROM materia 
                WHERE id_materia=".$id;

        $res= mysqli_query($con,$sql);
        $vec= mysqli_fetch_array($res);

    ?>
<h1><center>Modificar Materias</center></h1>
    <center><a href="../index.html">Menu</a></center>
    <br>
    <br>
    <form action="" method="post">
        <table border="3" cellpadding="60" align="center" width="600px" class="table table-bordered w-50">
            <tr><th colspan="2"><center>Id materia:<input type="text" name="idm" id="idm" readonly ></center></th></tr>
            <tr>
                <td><input type="text" placeholder="Nombre" name="nom" id="nom"></td>
                <td><input type="number" placeholder="Horas" min="1" max="1000" name="horas" id="horas"></td>
            </tr>
            <tr>
                <td> <input type="text" placeholder="Correlativas" name="correlativas" id="correlativas"></td>
                <td><input type="number" placeholder="Curso" min="1" max="10" name="curso" id="curso"></td>
            </tr>
            <tr><th colspan="2"><center><button type="submit"  name="boton" id="boton"> Enviar</button></center></th></tr>
        </table>
    </form>
</body>
</html>