<?php include("../template/cabecera.php"); ?>     <!-- SE USA CABECERA GENERICA PARA AHORRAR DATOS Y SE IMPORTA SIEMPRE -->



<?php 

$skuid=(isset($_POST['skuid']))?$_POST['skuid']:""; 
$tituloid=(isset($_POST['tituloid']))?$_POST['tituloid']:"";
$imagenid=(isset($_FILES['imagenid']['name']))?$_FILES['imagenid']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $skuid. "<br/>"; 
echo $tituloid. "<br/>";
echo $imagenid. "<br/>";
echo $accion. "<br/>";

switch($accion){

        case"Agregar":
            echo "Presionando boton agregar";
            break;

        case"Modificar":
             echo "Presionando boton agregar";
            break;

         case"Cancelar":
            echo "Presionando boton agregar";
                 break;
                  
}

?> <!-- CIERRA PHP, se agrega un lector y guardador de informacion solicitada, se usa un menu case para poder seleccionar una opcion (parecido a una idea de IF) -->

<div class="col-md-5">     <!-- se crea una box para cargar informacion contra BD -->


<div class="card"> <!-- box de carta para visual -->
    <div class="card-header"> <!-- formato visual de la tabla box -->
    <h3>Agregar articulo</h3> <!-- titulo de la box -->

    </div> 

    <div class="card-body"> <!-- box de carta para visual aqui se pone el body -->

    <form method="POST" enctype="multipart/form-data"> <!-- metodo para ingresar archivos multimedia-->

            <div class = "form-group"> <!-- visual -->
            <label for="sku">SKU:</label> <!-- se declara titulo en la box de informacion -->
            <input type="Texto" class="form-control" name="skuid" id="skuid"  placeholder="Agrega el codigo de el articulo"> <!-- se declara titulo en la box de informacion -->
            <small id="emailHelp" class="form-text text-muted">Sin espacio o tildes.</small> <!-- descripcion abajo de la box para usuario -->
</div>

            <div class = "form-group">
            <label for="titulo:">TITULO DEL ARTICULO:</label> <!-- titulo de la box -->
            <input type="Texto" class="form-control" name="tituloid" id="tituloid"  placeholder="Ejemplo: Guantes grises proforma"> <!-- cliente llena articulo -->
            <small id="emailHelp" class="form-text text-muted">Menos de 40 caracteres.</small> <!-- descripcion debajo de la box -->
</div>

            <div class = "form-group">
            <label for="titulo:">IMAGENES:</label> <!-- en esta cargamos imagenes -->
            <input type="file" class="form-control" name="imagenid" id="imagenid"  placeholder=""> <!-- Se usa para cargar imagenes con una palabra clave para ser importada  -->
            <small id="emailHelp" class="form-text text-muted">Imagenes menor a 5mb.</small> <!-- descripcion  -->
</div>

        <div class="btn-group" role="group" aria-label=""> <!-- Sistema de botones para indicar usuario procedimiento -->
            <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
            <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button> 
            <button type="submit" name="accion" value="cancelar" class="btn btn-danger">Cancelar</button>

    
</div>

</form>


    
</div>



<div class="col-md-7   "> <!-- se agrega otra box mas, esta devuelve informacion de la bd y puede ser modificada -->

    <table class="table table-bordered"> <!-- se crea tabla visual y para devolver informacion -->
        <thead>
            <tr>
                <th>skuid</th> <!-- se trae skuid -->
                <th>tituloid</th> <!-- se trae tituloid -->
                <th>imagenid</th> <!-- se trae imagenid -->
                <th>modificar</th> <!-- se modifica -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>guante01</td>
                <td>guantesrock</td>
                <td>imagenes</td>
                <td>Seleccionar | Borrar</td>
                <td></td>
            </tr>
        </tbody>
    </table>


</div>

    </div>

</div>

<?php include("../template/pie.php"); ?> <!-- SE USA FOOTER GENERICO PARA IMPORTARLO ASI AHORRAR RECURSOS -->