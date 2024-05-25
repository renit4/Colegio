<?php
    include("../conexion.php");

    $id_m= $_GET["idm"];
    echo "id materia: ".$id_m;
    $sql = "DELETE FROM materia
            WHERE id_materia=$id_m";

    $res= mysqli_query($con,$sql);
    if($res==true){
        echo "excelente";
    }
    else{
        echo "salio mal";
    }



?>