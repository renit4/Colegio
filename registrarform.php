<?php
    include("conexion.php");

    $dni = $_POST["dni"];
    $apeynom = $_POST["nom"];
    $nac = $_POST["fnac"];
    $ciudad = $_POST["ciu"];
    $dom = $_POST["domicilio"];
    $mail = $_POST["mail"];
    $gen = $_POST["gen"];
    $tel = $_POST["tel"];

    $sql = "INSERT INTO `alumno`(`dni`, `fnacimiento`, `apeynom`, `ciudad`, `domicilio`, `mail`, `genero`, `telefono`) 
            VALUES ($dni,'$nac','$apeynom','$ciudad','$dom','$mail','$gen',' $tel')";

    $res = mysqli_query($con,$sql);
    if($res == true){
        echo "excelente";
    }
    else{
        echo "salio mal :(";
    }
?>