<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM vSalida";
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
                <h1>Vuelos salidas</h1>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="aerolinea" placeholder="aerolinea">
                                    <input type="text" class="form-control mb-3" name="horaEst" placeholder="Hora estimada">
                                    <input type="text" class="form-control mb-3" name="Destino" placeholder="Destino">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha">
                                    <input type="text" class="form-control mb-3" name="asientos" placeholder="asientos">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio bs">
                                    <input type="text" class="form-control mb-3" name="Embarque" placeholder="embarque">
                                    <input type="text" class="form-control mb-3" name="vuelo" placeholder="vuelo">
                                    <input type="text" class="form-control mb-3" name="observaciones" placeholder="observaciones">
                                    <input type="text" class="form-control mb-3" name="idAeronave" placeholder="Aeronave">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Aerolinea</th>
                                        <th>Hora estimada</th>
                                        <th>Destino</th>
                                        <th>Fecha</th>
                                        <th>Asientos</th>
                                        <th>precio</th>
                                        <th>Embarque</th>
                                        <th>Vuelo</th>
                                        <th>Observaciones</th>
                                        <th>Aeronave</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['aerolinea']?></th>
                                                <th><?php  echo $row['horaEst']?></th>
                                                <th><?php  echo $row['Destino']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['asientos']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['Embarque']?></th>
                                                <th><?php  echo $row['vuelo']?></th> 
                                                <th><?php  echo $row['observaciones']?></th> 
                                                <th><?php  echo $row['idAeronave']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['vuelo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['vuelo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>