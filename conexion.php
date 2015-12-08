<?php
	$hostname = "localhost";
	$username = "root";
	$password ="";
	$database = "salonfiestas";

	$con = mysql_connect($hostname,$username,$password);
	if(!$con){
		die("Error en la conexion: ".mysql_error());
	}
	// else
	// {
	// 	echo "Conexion establecida";
	// }
	mysql_select_db($database,$con);
?>