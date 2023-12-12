<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM vLlegada  WHERE vuelo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vuelo.php");
    }
?>
