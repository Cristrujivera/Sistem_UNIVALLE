<?php
include("conexion.php");
$con=conectar();

$CI=$_POST['CI'];
$Nombre=$_POST['Nombre'];
$ApPaterno=$_POST['ApPaterno'];
$ApMaterno=$_POST['ApMaterno'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];


$sql="INSERT INTO cliente VALUES('$CI','$Nombre','$ApPaterno','$ApMaterno','$telefono','$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: vSalida/vuelo.php");
    
}else {
}
?>