<?php
if($_POST){
    header('location:inicio.php');

}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row">

            <div class="col-md-4">
            </div>


                <div class="col-md-4">
                    
                <br/><br/><br/>
                <div class="card">

             


                    <div class="card-header">
                    <form method="POST" >

                        <H4>Login</H4>
                   <form>
                   <div class = "form-group">
                   <br/> 
                   <label >Usuario.</label>
                   <input type="text" class="form-control" name="Usuario" placeholder="Ingrese Usuario">
                   <small id="emailHelp" class="form-text text-muted">No compartas tu Contraseña con nadie.</small>
                   
                    </div>

                   <div class="form-group">

                   <label >Contraseña:</label>
                   <input type="password" class="form-control" name="Contraseña"  placeholder="Contraseña">
                   </div>
                   <button type="submit" class="btn btn-primary">Entrar</button>
                   </form>
                   
                   

                    </div>
                    <div class="card-body">



                    </div>
                  
                </div>


                </div>
                
            </div>
        </div>
  
     </body>
</html>