<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursada</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
</head>
<body class="p-3 text-primary-emphasis bg-primary-subtle border-primary-subtle ">
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
    ></script>
    <?php
        include("../conexion.php");
        $sql1="SELECT A.id_alumno, A.apeynom, A.dni
                FROM alumno A";
        $sql2="SELECT M.id_materia, M.nombre FROM materia M";
        
        $resa=mysqli_query($con,$sql1);
        $resm=mysqli_query($con,$sql2);
    ?>
    <h1><center>Registrar cursada:</center></h1>
    <br>
    <br>
    <form action="proc_cursada.php" method="post">
        <table border="3" align="center" cellpadding="50" width="800px" class="table table-bordered w-50">
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