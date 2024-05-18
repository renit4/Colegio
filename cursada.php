<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursada</title>
</head>
<body>
    <?php
        include("conexion.php");
        $sql1="SELECT A.id_alumno, A.apeynom, A.dni
                FROM alumno A";
        $sql2="SELECT M.id_materia, M.nombre FROM materia M";
        echo $sql2;
        $resa=mysqli_query($con,$sql1);
        $resm=mysqli_query($con,$sql2);
    ?>
    <h1><center>Registrar cursada:</center></h1>
    <br>
    <br>
    <form action="proc_cursada.php" method="post">
        <table border="3" align="center" cellpadding="50" width="800px">
            <tr>
                <td>alumnos</td>
                <td><select name="alumnos" id="alumnos">
                    <?php   
                        while($veca=mysqli_fetch_array($resa)){
                    echo "<option value=$veca[0]>$veca[1]-$veca[2]</option>";
                    
                     }?>
                </select></td>
            </tr>
            <tr>
                <td>materias</td>
                <td><select name="materias" id="materias">
                <?php  
                        while($vecm=mysqli_fetch_array($resm)){
                    echo "<option value=$vecm[0]>$vecm[1]</option>";
                    
                     }?> 
                </select></td>
            </tr>
            <tr>
                <td>nota nro 1</td>
                <td><input type="number" min="1" max="10" name="n1" id="n1"></td>
            </tr>
            <tr>
                <td>nota nro 2</td>
                <td><input type="number" min="1" max="10" name="n2" id="n2"></td>
            </tr>
            <tr>
                <td>asistencia</td>
                <td><input type="number" min="1" max="100" name="asistencia" id="asistencia"></td>
            </tr>
            <tr>
                <td>estado</td>
                <td><input type="text" readonly name="estado" id="estado"></td>
            </tr>
            <tr>
                <td colspan="2"> <center><button type="submit" id="boton" name="boton">Enviar</button>     
                    <button type="submit"  name="estado" id="estado">Estado</button></center>
                </td>
            </tr>
        </table>
    </form>



</body>
</html>