<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM equipaje  WHERE idEquipaje='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: equipaje.php");
    }
?>
