<?php
    include("../conexion.php");

    $alum= $_POST["alumnos"];
    $mat = $_POST["materias"];
    $num1  = $_POST["n1"];
    $num2  = $_POST["n2"];
    $asis  = $_POST["asistencia"];
    $est  = $_POST["estado"];

    $sql = "INSERT INTO `cursada`( `nota1`, `nota2`, `asistencia`, `estado`) 
            VALUES ($num1,$num2,$asis,'$est')";

    $res = mysqli_query($con,$sql);
    if($res==true){
        echo "excelente";
    }
    else{
        echo "salio mal";
    }


?>