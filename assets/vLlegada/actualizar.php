<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM vLlegada WHERE vuelo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="vuelo" value="<?php echo $row['vuelo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="aerolinea" placeholder="aerolinea" value="<?php echo $row['aerolinea']  ?>">
                                <input type="text" class="form-control mb-3" name="horaEst" placeholder="horaEst" value="<?php echo $row['horaEst']  ?>">
                                <input type="text" class="form-control mb-3" name="Destino" placeholder="Destino" value="<?php echo $row['Destino']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="asientos" placeholder="asientos" value="<?php echo $row['asientos']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="puerta" placeholder="Embarque" value="<?php echo $row['puerta']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="observaciones" value="<?php echo $row['observaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="idAeronave" placeholder="Aeronave" value="<?php echo $row['idAeronave']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>