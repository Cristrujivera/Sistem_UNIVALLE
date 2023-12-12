<?php

include("conexion.php");
$con=conectar();

$aerolinea=$_POST['aerolinea'];
$horaEst=$_POST['horaEst'];
$Destino=$_POST['Destino'];
$fecha=$_POST['fecha'];
$asientos=$_POST['asientos'];
$precio=$_POST['precio'];
$puerta=$_POST['puerta'];
$vuelo=$_POST['vuelo'];
$observaciones=$_POST['observaciones'];
$idAeronave=$_POST['idAeronave'];

$sql="UPDATE vLlegada SET  aerolinea='$aerolinea',horaEst='$horaEst',Destino='$Destino',fecha='$fecha',asientos='$asientos',precio='$precio',puerta='$puerta',vuelo='$vuelo',observaciones='$observaciones',idAeronave='$idAeronave' WHERE vuelo='$vuelo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vuelo.php");
    }
?>