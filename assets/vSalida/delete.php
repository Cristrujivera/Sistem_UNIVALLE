<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM vSalida  WHERE vuelo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vuelo.php");
    }
?>
