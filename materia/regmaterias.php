<?php
    include("../conexion.php");

    $nombre = $_POST["nom"];
    $hs = $_POST["horas"];
    $correlativas= $_POST["correlativas"];
    $curso = $_POST["curso"];

    $sql="INSERT INTO `materia`(`nombre`, `cantidad_hs`, `correlativas`, `curso`)
                        VALUES ('$nombre',$hs,'$correlativas',$curso)";

    $res= mysqli_query($con,$sql);
    if($res == true){
        echo "salio bien!";
    }
    if($res == false){
        echo "salio mal :(";
    }

?>