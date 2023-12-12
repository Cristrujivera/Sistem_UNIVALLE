<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM aernaves";
    $query=mysqli_query($con,$sql);

    $sql1="SELECT *  FROM vLlegada";
    $query1=mysqli_query($con,$sql1);

    $sql2="SELECT *  FROM vSalida";
    $query2=mysqli_query($con,$sql2);
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
                                                                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>

                        <h1>Vuelos llegada</h1>
                    <div class="row"> 
                        
                        

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
                                            while($row1=mysqli_fetch_array($query1)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row1['aerolinea']?></th>
                                                <th><?php  echo $row1['horaEst']?></th>
                                                <th><?php  echo $row1['Destino']?></th>
                                                <th><?php  echo $row1['fecha']?></th>
                                                <th><?php  echo $row1['asientos']?></th>
                                                <th><?php  echo $row1['precio']?></th>
                                                <th><?php  echo $row1['puerta']?></th>
                                                <th><?php  echo $row1['vuelo']?></th> 
                                                <th><?php  echo $row1['observaciones']?></th> 
                                                <th><?php  echo $row1['idAeronave']?></th>    
                                                                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 

                    <h1>Vuelos salidas</h1>
                    <div class="row"> 
                        

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
                                            while($row2=mysqli_fetch_array($query2)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row2['aerolinea']?></th>
                                                <th><?php  echo $row2['horaEst']?></th>
                                                <th><?php  echo $row2['Destino']?></th>
                                                <th><?php  echo $row2['fecha']?></th>
                                                <th><?php  echo $row2['asientos']?></th>
                                                <th><?php  echo $row2['precio']?></th>
                                                <th><?php  echo $row2['Embarque']?></th>
                                                <th><?php  echo $row2['vuelo']?></th> 
                                                <th><?php  echo $row2['observaciones']?></th> 
                                                <th><?php  echo $row2['idAeronave']?></th>                                           
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        

                    </div>  
            </div>
    </body>
</html>