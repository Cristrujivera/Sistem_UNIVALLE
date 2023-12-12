<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="CI" placeholder="CI">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="ApPaterno" placeholder="apellido paterno">
                                    <input type="text" class="form-control mb-3" name="ApMaterno" placeholder="apellido materno">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="edad">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                                
                        </div>
                        <h1>Gracias por eligir nuestro aeropuerto</h1>
                    </div>  
            </div>
    </body>
</html>