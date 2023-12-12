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
                    <div class="row"> 
                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>CI</th>
                                        <th>nombre</th>
                                        <th>apellido paterno</th>
                                        <th>apellido materno</th>
                                        <th>telefono</th>
                                        <th>edad</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['CI']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['ApPaterno']?></th>
                                                <th><?php  echo $row['ApMaterno']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['edad']?></th>                                            
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