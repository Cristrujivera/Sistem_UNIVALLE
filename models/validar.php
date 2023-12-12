<?php
include('db.php');
$codres=$_POST['reserva'];
$codcli=$_POST['cliente'];



$consulta="SELECT*FROM login WHERE tipo='$codres' and contra='$codcli'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:control/index.html");

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
