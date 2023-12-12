<?php
function conectar(){
    $host="sql302.byethost11.com";
    $user="b11_31703231";
    $pass="73727671awe";

    $bd="b11_31703231_AeropuertoCnC";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
