<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
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
        $id= $_GET["idm"];
        echo "id materia: ".$id;

        $sql= " SELECT * FROM materia 
                WHERE id_materia=".$id;

        $res= mysqli_query($con,$sql);
        $vec= mysqli_fetch_array($res);

    ?>
<h1><center>Modificar Materias</center></h1>
    <center><a href="../index.html">Menu</a></center>
    <br>
    <br>
    <form action="proc_modmat.php" method="post">
        <table border="3" cellpadding="60" align="center" width="600px" class="table table-bordered w-50">
            <tr><th colspan="2"><center>Id materia: <input type="text" name="idm" id="idm" value="<?php echo$vec[0] ?>" readonly ></center></th></tr>
            <tr>
                <td><input type="text" placeholder="Nombre" name="nom" id="nom" value="<?php echo$vec[1] ?>"></td>
                <td><input type="number" placeholder="Horas" min="1" max="1000" name="horas" id="horas" value="<?php echo$vec[2] ?>"></td>
            </tr>
            <tr>
                <td> <input type="text" placeholder="Correlativas" name="correlativas" id="correlativas" value="<?php echo$vec[3] ?>"></td>
                <td><input type="number" placeholder="Curso" min="1" max="10" name="curso" id="curso" value="<?php echo$vec[4] ?>"></td>
            </tr>
            <tr><th colspan="2"><center><button type="submit" > Enviar</button></center></th></tr>
        </table>
    </form>
</body>
</html>