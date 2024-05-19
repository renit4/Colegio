<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="css/imprimir.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
</head>
<body class="p-3 text-primary-emphasis bg-primary-subtle border-primary-subtle ">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
    <?php
    include("../conexion.php");
        $sql="SELECT * FROM `alumno`";
        $res=mysqli_query($con,$sql);

    if($res == false){
        echo "no funciono";
    }    
    else{
        ?>
        <h1><center>Impresion de alumnos:</center></h1>
        <br>
        <a href="../index.html"><center>Volver</center></a>
        <br>
        <table  class="table table-bordered w-50" border="2px solid #333" width="90%" table-layout="fixed" align="center" >
            <tr>
                <th class='id'>id</th>
                <th>dni</th>
                <th>fecha</th>
                <th class='nom'>nombre</th>
                <th>ciudad</th>
                <th>domicilio</th>
                <th class='email'>mail</th>
                <th>genero</th>
                <th>telefono</th>
                <th>modificar</th>
                <th>eliminar</th>
            </tr>
            <?php
            while($vec = mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<th class='id'>$vec[0]</th>";
                echo "<td>$vec[1]</td>";
                echo "<td>$vec[2]</td>";
                echo "<td class='nom'>$vec[3]</td>";
                echo "<td>$vec[4]</td>";
                echo "<td>$vec[5]</td>";
                echo "<td class='email'>$vec[6]</td>";
                echo "<td>$vec[7]</td>";
                echo "<td>$vec[8]</td>";
                echo "<th> <a href='modificar_alu.php?ida=$vec[0]' >Modificar </a> </th>";
                echo "<th> <a href='eliminar_alu.php?ida=$vec[0]'>Eliminar</a> </th>";
                echo "</tr>";
            } echo "</table>";

        }?>
    
</body>
</html>