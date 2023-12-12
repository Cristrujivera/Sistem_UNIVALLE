<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM aernaves WHERE idAeronave='$id'";
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
                    
                                <input type="hidden" name="idAeronave" value="<?php echo $row['idAeronave']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="<?php echo $row['tipo']  ?>">
                                <input type="text" class="form-control mb-3" name="matricula" placeholder="matricula" value="<?php echo $row['matricula']  ?>">
                                <input type="text" class="form-control mb-3" name="velocidad" placeholder="velocidad" value="<?php echo $row['velocidad']  ?>">
                                <input type="text" class="form-control mb-3" name="altitud" placeholder="altitud" value="<?php echo $row['altitud']  ?>">
                                <input type="text" class="form-control mb-3" name="distancia" placeholder="distancia" value="<?php echo $row['distancia']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>