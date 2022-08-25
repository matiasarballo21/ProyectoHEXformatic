<!doctype html> <!-- se usa este PHP para reciclar y ahorrar recursos, siempre se va a utilizar como cabecera -->
<html lang="en">
  <head>
    <title>cabecera</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- Traigo elemento boostrap -->
  </head>
  <body>

        <?php $url="http://".$_SERVER['HTTP_HOST']."/Hexformatica" ?>

            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">inicio</a>
                    <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Productos</a>
                    <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Finalizar seccion</a>
                    <a class="nav-item nav-link" href="<?php echo $url;?>">Volver a sitio</a>    
                </div>
            </nav>    




    <div class="container">
               <br/>
        <div class="row">