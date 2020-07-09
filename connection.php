<!-- CREAR BASE DE DATOS-->
<!-- CREATE DATABASE testranfery -->

<?php
		$conexion = new MySQLi("localhost", "root","", "testranfery");
		if ($conexion -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $conexion -> mysqli_connect_errno() 
				. ") " . $conexion -> mysqli_connect_error());
		}
		else{
      echo "Conexión exitosa!";
    }
?>