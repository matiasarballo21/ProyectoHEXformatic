<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
if(!empty($_POST['Usuario']) && !empty($_POST['Contraseña'])){
 $nickname = $_POST['Usuario'];
 $password = $_POST['Contraseña']; 
 if($nickname == "user" && $password == "user"){
    echo "Ingresaste exitosamente como Cliente";
    echo "<br>";
    echo "<a href='formulario.php'>CLick aqui para continuar</a>";
 }
 if($nickname == "admin" && $password == "admin"){
    echo"Ingresaste exitosamente como Administrador";
    echo "<br>"; 
    echo "<a href='admin.php'>Click aqui para continuar</a>";
 } 
 if($nickname != "admin" && $nickname != "user" || $password != "admin" && $password != "user"){
    echo"usuario o contrasenya de  erroneo";
 }
 

}else{
   echo "<p>los datos estan vacios</p>";
}


?>
</body>
</html>
