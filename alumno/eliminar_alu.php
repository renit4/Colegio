<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
    <br>
    <h1><center>Eliminar alumno</center></h1>
    <br>
    <br>

    <?php
    include("../conexion.php");
        $id= $_GET["ida"];
        $sql= "DELETE FROM alumno 
                WHERE id_alumno=$id";
        $res=mysqli_query($con,$sql);
        if($res==true){
            echo "perfecto";
        }
        else{
            echo "salio mal :(";
        }
        echo "id alumno: $id";
    ?>
    <br>
    <br>
    <br>
    <br>
</body>
</html>