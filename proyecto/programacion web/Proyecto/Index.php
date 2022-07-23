<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Styles/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicie Sesion</title>
</head>
<body>

    <div class="logodiv">
<a href="Index.php"><img src="./imagen/logo.png" alt="" class="logo"> </a>
    </div>
<div class="formulario">
<?php    
if(isset( $_POST['Usuario'])){
    $usuario = $_POST['Usuario'];
    $password = $_POST['Contraseña'];

    $campos = array();

    if ($usuario == "" || strlen($cedula) < 8) {
        array_push($campos, "El campo usuario no debe estar vacio, por favor ingrese una cedula valida.");
    }
    if ($password == "") {
        array_push($campos, "El campo Password no debe estar vacio, por favor ingrese un nombre.");
    }
} ?>
    <Form action="./Pages/login.php" method="POST" >
        <label for="Usuario" class="etiqueta">Ingrese su usuario: </label> <input class="campo" type="text" name="Usuario" id="User"  ><br>
        <label for="Contraseña" class="etiqueta">Ingrese su Contraseña: </label> <input class="campo" type="password" name="Contraseña" id="password"  ><br>
        <input type="submit" name="Entrar" id="" class="submit">
    </Form>
</div>

</body>
</html>