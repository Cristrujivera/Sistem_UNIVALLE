<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM aernaves";
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
                <h1>Aeronaves</h1>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idAeronave" placeholder="Aeronave">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo o modelo">
                                    <input type="text" class="form-control mb-3" name="matricula" placeholder="matricula">
                                    <input type="text" class="form-control mb-3" name="velocidad" placeholder="velocidad aprox.">
                                    <input type="text" class="form-control mb-3" name="altitud" placeholder="altitud aprox.">
                                    <input type="text" class="form-control mb-3" name="distancia" placeholder="distancia aprox.">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Aeronave</th>
                                        <th>tipo o modelo</th>
                                        <th>matricula</th>
                                        <th>velocidad aprox.</th>
                                        <th>altitud aprox.</th>
                                        <th>distancia aprox.</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idAeronave']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['matricula']?></th>
                                                <th><?php  echo $row['velocidad']?></th>
                                                <th><?php  echo $row['altitud']?></th>
                                                <th><?php  echo $row['distancia']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['idAeronave'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idAeronave'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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