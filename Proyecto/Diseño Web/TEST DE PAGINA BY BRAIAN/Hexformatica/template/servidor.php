<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVIDOR</title>
</head>
<body>


<th>telefono.</th>
<th>nombre.</th>
<th>apellido.</th>
<th>fechanac.</th>
</tr>

<?php

<table>

$conexion = mysqli_connect('localhost', 'root', 'root','agenda' );

    if(!$conexion){
        die('error en la conexion.' . mysqli_connect_error();)  
    
    } 

    if (isset($_POST['telefono']) ){

        $telfono= $_POST['telefono'];
        $telfono= $_POST['nombre'];
        $telfono= $_POST['apellido'];
        $telfono= $_POST['fechanac'];
    }


    echo "conexion exitosa!";

$resultado = $conexion->query('SELECT * FROM conexionphp.php');


    while (($fila= $resultado->fetch_assoc())){

        echo "<tr>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['fechanac'] . "</td>";
        echo "</tr>";
    }
?>

    </table>

</body>
</html>

<div class="container">
        <br/>
        <div class="row">