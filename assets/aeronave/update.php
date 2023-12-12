<?php

include("conexion.php");
$con=conectar();

$idAeronave=$_POST['idAeronave'];
$tipo=$_POST['tipo'];
$matricula=$_POST['matricula'];
$velocidad=$_POST['velocidad'];
$altitud=$_POST['altitud'];
$distancia=$_POST['distancia'];

$sql="UPDATE aernaves SET  tipo='$tipo',matricula='$matricula',velocidad='$velocidad',altitud='$altitud',distancia='$distancia'WHERE idAeronave='$idAeronave'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: aeronaves.php");
    }
?>