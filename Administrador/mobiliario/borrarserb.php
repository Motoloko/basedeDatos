<?php
	include ("../../conexion.php");

	if(isset($_GET['id_m'])){
		$id = $_GET['id_m'];

		$query = "DELETE from mobiliario where id_m='$id'";

		$result = mysql_query($query) or exit(mysql_error());

		if($result){
			echo "Borrado exitosamente... ";
			echo "<a href='editservicio.php'> Regresar! </a>";
		}
	}
	
?>