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
    $id = $_POST["ida"];


    $sql= "UPDATE alumno
            SET dni= $dni,
            fnacimiento='$nac',
            apeynom='$apeynom',
            ciudad='$ciudad',
            domicilio='$dom',
            mail='$mail',
            genero='$gen',
            telefono='$tel'
            WHERE id_alumno=$id";

    $res = mysqli_query($con,$sql);

    if($res==true){
        echo "exitoso";
    }
    else{
        echo "salio mal";
    }



?>