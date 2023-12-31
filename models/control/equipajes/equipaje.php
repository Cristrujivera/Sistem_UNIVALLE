<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM equipaje";
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
                <h1>Equipajes</h1>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idEquipaje" placeholder="Tres ultimos digitos de su CI">
                                    <input type="text" class="form-control mb-3" name="CI" placeholder="CI">
                                    <input type="text" class="form-control mb-3" name="peso" placeholder="peso">
                                    <input type="text" class="form-control mb-3" name="observaciones" placeholder="observaciones">
                                    <input type="text" class="form-control mb-3" name="caracteristicas" placeholder="caracteristicas">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo">
                                    <input type="text" class="form-control mb-3" name="numero" placeholder="numero de maletas">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cod Equipaje</th>
                                        <th>CI</th>
                                        <th>peso</th>
                                        <th>observaciones</th>
                                        <th>caracteristicas</th>
                                        <th>tipo</th>
                                        <th>numero</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idEquipaje']?></th>
                                                <th><?php  echo $row['CI']?></th>
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['observaciones']?></th>
                                                <th><?php  echo $row['caracteristicas']?></th>
                                                <th><?php  echo $row['tipo']?></th>    
                                                <th><?php  echo $row['numero']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['idEquipaje'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idEquipaje'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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