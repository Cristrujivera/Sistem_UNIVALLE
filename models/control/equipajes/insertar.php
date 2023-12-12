<?php
include("conexion.php");
$con=conectar();

$idEquipaje=$_POST['idEquipaje'];
$CI=$_POST['CI'];
$peso=$_POST['peso'];
$observaciones=$_POST['observaciones'];
$caracteristicas=$_POST['caracteristicas'];
$tipo=$_POST['tipo'];
$numero=$_POST['numero'];



$sql="INSERT INTO equipaje VALUES('$idEquipaje','$CI','$peso','$observaciones','$caracteristicas','$tipo','$numero')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: equipaje.php");
    
}else {
    echo "<script> alert('INCORRECTO');
        location.href = 'equipaje.php';
        </script>";
}
?>