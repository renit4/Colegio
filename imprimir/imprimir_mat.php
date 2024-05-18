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
        $sql="SELECT * FROM materia";
        $res= mysqli_query($con,$sql);
        if($res==false){
            echo "error";
        }
        else{
        ?>
    <h1><center>Listado de materias</center></h1>
    <br>
    <br>
    <table border="3" align="center" cellpadding="60">
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>horas</td>
            <td>correlativas</td>
            <td>curso</td>
        </tr>
       <?php
         while($vec=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>$vec[0]</td>";
            echo "<td>$vec[1]</td>";
            echo "<td>$vec[2]</td>";
            echo "<td>$vec[3]</td>";
            echo "<td>$vec[4]</td>";
            echo "<tr>";
         }echo"</table>";
        }?>
        
</body>
</html>