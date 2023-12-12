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

$sql="UPDATE equipaje SET  CI='$CI',peso='$peso',observaciones='$observaciones',caracteristicas='$caracteristicas',tipo='$tipo',numero='$numero'WHERE idEquipaje='$idEquipaje'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: equipaje.php");
    }
?>