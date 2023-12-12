<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM aernaves  WHERE idAeronave='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: aeronaves.php");
    }
?>
