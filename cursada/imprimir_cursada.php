<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cursadas</title>
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
        $sql= "SELECT A.id_alumno, A.apeynom, M.id_materia, M.nombre, C.*
                FROM alumno A, cursada C, materia M
                WHERE A.id_alumno=C.id_alumno 
                AND   M.id_materia=C.id_materia";
        $res=mysqli_query($con,$sql);
        if($res==false){
            echo "salio mal";
        }
        else{
        ?> 
    <h1><center>Cursadas</center></h1>
    <br>
    <center><a href="../index.html">menu</a></center>
    <br>
    <table   class="table table-bordered w-50" border="2px solid #333" width="90%" table-layout="fixed" align="center" >
        <tr>
            <td>nombre</td>
            <td>materia</td>
            <td>n1</td>
            <td>n2</td>
            <td>asistencia</td>
            <td>estado</td>
            <td>Modificar</td>
            <td>Eliminar</td>
        </tr> 
        <?php
        while($vec = mysqli_fetch_array($res)){
        
        echo "<tr>";
        echo "<td>$vec[1]</td>";
        echo "<td>$vec[3]</td>";
        echo "<td>$vec[6]</td>";
        echo "<td>$vec[7]</td>";
        echo "<td>$vec[8]</td>";
        echo "<td>$vec[9]</td>";
        echo "<td><a href='mod_cursada.php?ida=$vec[0]&idm=$vec[2]'>Modificar</a> </td>";
        echo "<td><a href='eli_cursada.php?ida=$vec[0]&idm=$vec[2] ' >Eliminar</a></td>";    
        echo "<tr>";
    } echo "</table>";
    
    }?>
</body>
</html>