<?php

    ini_set("display_errors", "on");

    $conexion = conectar_MySQL( "sql302.byethost11.com", "b11_31703231", "73727671awe", "b11_31703231_AeropuertoCnC" );

    function conectar_MySQL( $host, $user, $pass, $bd )
	{
		
		$conexion = mysqli_connect( $host, $user, $pass, $bd ) or die ( "Error al conectar : ".mysql_error() );

		
		mysqli_select_db($conexion, $bd) or die ( "Error seleccionar la BD : ".mysql_error() );

		return $conexion;
	}

    $CI = $_POST['CI'];
    $Nombre = $_POST['Nombre'];
    $ApPaterno = $_POST['ApPaterno'];
    $ApMaterno = $_POST['apMaterno'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    

    $insertar = "INSERT INTO cliente VALUES ('$CI','$Nombre','$ApPaterno','$ApMaterno','$telefono','$edad')";

    $query = mysqli_query($conexion, $insertar);

    if($query){
        echo "<script> alert('CODIGO: 76244797');
        location.href = 'index.html';
        </script>";
    }else{
        echo "<script> alert('INCORRECTO');
        location.href = 'ingresardatos.html';
        </script>";
    }

?>