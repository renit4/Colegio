<?php
    include("../conexion.php");
    $id_a = $_GET["ida"];
    $id_m = $_GET["idm"];

    $sql = "DELETE FROM cursada
            WHERE id_alumno=$id_a
            AND id_materia=$id_m";
    $res = mysqli_query($con,$sql);

    if($res == true){
        echo "salio bien";
    }
    else{
        echo "muy mal";
    }

?>