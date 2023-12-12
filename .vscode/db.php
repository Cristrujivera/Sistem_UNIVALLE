<?php

ini_set("display_errors", "on");

    // Conectar (se detendrá la ejecución si se produce un error) 
    //$conexion = conectar_MySQL( "IP_DE_SERVIDOR", "TU_USUARIO", "TU_PASSWORD", "NOMBRE_DE_LA_BASE_DE_DATOS" );
    
    $conexion = conectar_MySQL( "sql302.byethost11.com", "b11_31703231", "73727671awe", "b11_31703231_AeropuertoCnC" );


    // ----------------------------------------------

    function conectar_MySQL( $host, $user, $pass, $bd )
    {
        // Conectar con MySQL:
        $conexion = mysqli_connect( $host, $user, $pass, $bd ) or die ( "Error al conectar : ".mysql_error() );

        // Seleccionar a la base de datos deseada
        mysqli_select_db($conexion, $bd) or die ( "Error seleccionar la BD : ".mysql_error() );

        return $conexion;
    }
?>