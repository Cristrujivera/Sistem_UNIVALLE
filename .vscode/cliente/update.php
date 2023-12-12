<?php

include("conexion.php");
$con=conectar();

$CI=$_POST['CI'];
$Nombre=$_POST['Nombre'];
$ApPaterno=$_POST['ApPaterno'];
$ApMaterno=$_POST['ApMaterno'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];

$sql="UPDATE cliente SET  CI='$CI',Nombre='$Nombre',ApPaterno='$ApPaterno',ApMaterno='$ApMaterno',telefono='$telefono',edad='$edad' WHERE CI='$CI'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>