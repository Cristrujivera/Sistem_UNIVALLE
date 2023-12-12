<?php
include('db.php');
$codres=$_POST['reserva'];
$codcli=$_POST['cliente'];



$consulta="SELECT*FROM reserva WHERE idReserva='$codres' and CI='$codcli'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:cliente/alumno.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
