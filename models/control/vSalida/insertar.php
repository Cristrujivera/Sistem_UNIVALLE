<?php
include("conexion.php");
$con=conectar();

$aerolinea=$_POST['aerolinea'];
$horaEst=$_POST['horaEst'];
$Destino=$_POST['Destino'];
$fecha=$_POST['fecha'];
$asientos=$_POST['asientos'];
$precio=$_POST['precio'];
$Embarque=$_POST['Embarque'];
$vuelo=$_POST['vuelo'];
$observaciones=$_POST['observaciones'];
$idAeronave=$_POST['idAeronave'];


$sql="INSERT INTO vSalida VALUES('$aerolinea','$horaEst','$Destino','$fecha','$asientos','$precio','$Embarque','$vuelo','$observaciones','$idAeronave')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: vuelo.php");
    
}else {
    echo "<script> alert('INCORRECTO');
        location.href = 'vuelo.php';
        </script>";
}
?>