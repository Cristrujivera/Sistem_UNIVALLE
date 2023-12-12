<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM equipaje WHERE idEquipaje='$id'";
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
                    
                                <input type="hidden" name="idEquipaje" value="<?php echo $row['idEquipaje']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="CI" placeholder="CI" value="<?php echo $row['CI']  ?>">
                                <input type="text" class="form-control mb-3" name="peso" placeholder="peso" value="<?php echo $row['peso']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="observaciones" value="<?php echo $row['observaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="caracteristicas" placeholder="caracteristicas" value="<?php echo $row['caracteristicas']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="<?php echo $row['tipo']  ?>">
                                <input type="text" class="form-control mb-3" name="numero" placeholder="numero" value="<?php echo $row['numero']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>