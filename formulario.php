<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Crud con php y Mysql</h1>
    <form action="formulario.php" method="post" class= "row g-3">
    <div class= "col-md-6">   
        <label for="form-label">Identificacion</label>
        <input type="text" name="Id" class="form-control" placeholder="ingrese su CC">
        </div>

        <div class= "col-md-6">   
        <label for="form-label">Nombre completo</label>
        <input type="text" name="Nombre" class="form-control" placeholder="ingrese su Nombre completo">
        </div>

        <div class= "col-md-6">   
        <label for="form-label">Apellido</label>
        <input type="text" name="Apellido" class="form-control" placeholder="ingrese su Apellido">
        </div>

        <div class= "col-md-6">   
        <label for="form-label">Telefono</label>
        <input type="text" name="Telefono" class="form-control" placeholder="ingrese su Telefono">
        </div>

        <div class= "col-md-6">
        <label for="form-label">Fecha de Nacimiento</label>
        <input type="date" name="Fecha" class="form-control" placeholder="ingrese su Fecha de Nacimiento">
        </div>

        <div class= "col-md-6">
        <label for="form-label">Correo electronico </label>
        <input type="text" name="Correo" class="form-control" placeholder="ingrese su correo electronico">
        </div>
        <br>
        <div class="col md-4">
            <input type="submit" value="Guardar" class="btn btn-outline-dark" name= "Guardar"></button>
        </div>
        
    
        
    </form>
    <?php
        if(isset($_POST['Guardar']))
        {
            //$_POST['name'] es para llamar el elemento
            include('conexion.php');
            // ya con esto puedo acceder a todas las variables que tengo dentro de la hoja
            //datos de entrada son todos los div que creamos
            $id=$_POST['Id'];
            $nombre=$_POST['Nombre'];
            $apellido=$_POST['Apellido'];
            $telefono=$_POST['Telefono'];
            $fecha=$_POST['Fecha'];
            $correo=$_POST['Correo'];

            // vamos hacer la consulta a la base de datos
            mysqli_query($conexion,"INSERT INTO registro(Id,Nombre,Apellido,Telefono,Fecha,Correo)VALUES('$id','$nombre','$apellido','$telefono','$fecha','$correo')");

            echo "Datos Guardados Correctamente";
        };
    ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</body>
</html>