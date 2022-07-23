<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styles/styleform.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="logodiv">
        <a href="../Index.php"><img src="../imagen/logo.png" alt="" class="logo"></a>
    </div>

    <H1 class="titulo">Formulario de informacion del cliente</H1>
    
    <div class="formulario">
        <form action="../Index.php" method="POST">
        <?php
        if(isset( $_POST['CI'])){
            $cedula = $_POST['CI'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $mail = $_POST['mail'];
            $fNacimiento = $_POST['fNac'];
            $direccion = $_POST['dir'];
            $celular = $_POST['cel'];

            $campos = array();

            if ($cedula == "" || strlen($cedula) < 8) {
                array_push($campos, "El campo Cedula no debe estar vacio, por favor ingrese una cedula valida.");
            }
            if ($nombre == "") {
                array_push($campos, "El campo Nombre no debe estar vacio, por favor ingrese un nombre.");
            }
            if ($apellido == "") {
                array_push($campos, "El campo Apellido no debe estar vacio, por favor ingrese un apellido.");
            }
            if ($mail == "" || strpos($mail, "@") === false ){
                array_push($campos, "El campo de Correo electronico no debe estar vacio, por favor ingrese una Correo valido.");
            }
            if ($fNacimiento == "") {
                array_push($campos, "El campo fecha de nacimiento no debe estar vacio, por favor ingrese una fecha.");
            }
            if ($direccion == "") {
                array_push($campos, "El campo Direccion no debe estar vacio, por favor ingrese una direccion.");
            }
            if ($celular == "") {
                array_push($campos, "El campo Celular no debe estar vacio, por favor ingrese un numero de celular valido.");
            }
            if (count($campos) > 0) {
                echo "<div class='error'> ";
                for($i = 0 ; $i < count($campos); $i++ )
                echo "<li>".$campos[$i];
            }else{
                 echo"<div class='correcto'>
                 datos correctos";
                 
            }
            echo" </div>";
        }
        ?>
            <label for="">Ingrese su Cedula :</label>               <input value="<?php if(isset( $_POST['CI'])){echo"$cedula";}
            ?>" type="number" maxlength="8" name="CI" id="CI">
            <br>       
            <label for="">Ingrese su Nombre :</label>               <input value="<?php if(isset( $_POST['nombre'])){echo"$nombre";}
            ?>" type="text" name="nombre" id="name"> 
            <br>
            <label for="">Ingrese su Apellido :</label>             <input value="<?php if(isset( $_POST['apellido'])){echo"$apellido";}
            ?>" type="text" name="apellido" id="sname"> 
            <br>
            <label for="">Ingrese su Correo Electronico : </label>  <input value="<?php if(isset( $_POST['mail'])){echo"$mail";}
            ?>" type="text" name="mail" id="mail">
            <br>
            <label for="">Ingrese su fecha de nacimiento :</label>  <input value="<?php if(isset( $_POST['fNac'])){echo"$fNacimiento";}
            ?>" type="date" name="fNac" id="bday"> 
            <br>
            <label for="">Ingrese su direccion :</label>            <input value="<?php if(isset( $_POST['dir'])){echo"$direccion";}
            ?>" type="text" name="dir" id="adr"> 
            <br>
            <label for="">Ingrese su numero de celular :</label>    <input value="<?php if(isset( $_POST['cel'])){echo"$celular";}
            ?>" type="number" name="cel" id="cel"> 
            <br>
            <input type="submit" name="" id="">     
        </form>
    </div>

<?php
if(isset($_POST['CI'])){
if (count($campos) > 0) {
}else{
     
$archivo =fopen("../datos.txt" , "a");
$linea = $cedula . ":" . $nombre .":" . $apellido .":". $mail .":" . $fNacimiento . ":" . $direccion . ":" . $celular;
fputs ($archivo, $linea);
fclose ($archivo);


}
}
?>

</body>
</html>