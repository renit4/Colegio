<?php
    include("../conexion.php");

    $id = $_POST["idm"];
    $nom = $_POST["nom"];
    $hs = $_POST["horas"];
    $correlativas = $_POST["correlativas"];
    $curso = $_POST["curso"];

    $sql = "UPDATE materia
            SET nombre='$nom',
            cantidad_hs=$hs,
            correlativas='$correlativas',
            curso=$curso
            WHERE id_materia = $id";
            

    $res = mysqli_query($con,$sql);

    if($res==true){
        echo "excelente";
    }
    else{
        echo "salio mal";
    }


?>