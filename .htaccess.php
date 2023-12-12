<?php

    ini_set("display_errors", "on");

    $conexion = conectar_MySQL( "sql302.byethost11.com", "b11_31703231", "73727671awe", "b11_31703231_AeropuertoCnC" );

    function conectar_MySQL( $host, $user, $pass, $bd )
	{
		
		$conexion = mysqli_connect( $host, $user, $pass, $bd ) or die ( "Error al conectar : ".mysql_error() );

		
		mysqli_select_db($conexion, $bd) or die ( "Error seleccionar la BD : ".mysql_error() );

		return $conexion;
	}

    $destino = $_POST['destino'];
    $salida = $_POST['salida'];
    

    $insertar = "INSERT INTO vSalida VALUES ('ecojet','13:40','$destino','$salida','45','280','b57','520','en tierra','255')";

    $query = mysqli_query($conexion, $insertar);

    if($query){
        echo "<script> alert('Buscando') </script>";
        
        function listarPersonas( $conexion )
	{
		$sql = "SELECT * FROM vSalida ORDER BY fecha DESC LIMIT 1";
		$ok = true;

		$rs = mysqli_query( $conexion, $sql );

		if( $rs ) 
		{
			if( mysqli_num_rows($rs) > 0 )
			{
				echo "<p/>VIAJES ENCONTRADOS<br/><br>";
				
				while( $obj = mysqli_fetch_object($rs) )
					echo "AEROLINEA: ".$obj->aerolinea." <br> HORA: ".$obj->horaEst." <br> DESTINO: ".$obj->Destino." <br> FECHA: ".$obj->fecha." <br> ASIENTOS: ".$obj->asientos." <br> PRECIO: ".$obj->precio."<br /><br>";
                    echo "<a href='ingresardatos.html'>SELECCIONAR</a>";
			}
			else
				echo "<p>No se encontraron vuelos</p>";
		}
		else
			$ok = false;

		return $ok;
	}

    $ok = listarPersonas( $conexion );

	if( $ok == false )
		echo "<p>Error al listar los datos.</p>";
	else
		echo "<p></p>";

    }else{
        echo "<script> alert('Buscando') </script>";
        echo "NO SE ENCONTRARON VUELOS !!!";
    }

?>