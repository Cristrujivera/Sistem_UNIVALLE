<?php
include("conexion.php");
$con=conectar();

$idAeronave=$_POST['idAeronave'];
$tipo=$_POST['tipo'];
$matricula=$_POST['matricula'];
$velocidad=$_POST['velocidad'];
$altitud=$_POST['altitud'];
$distancia=$_POST['distancia'];



$sql="INSERT INTO aernaves VALUES('$idAeronave','$tipo','$matricula','$velocidad','$altitud','$distancia')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: aeronaves.php");
    
}else {
    echo "<script> alert('INCORRECTO');
        location.href = 'aeronaves.php';
        </script>";
}
?>