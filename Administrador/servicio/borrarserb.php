<?php
	include ("../../conexion.php");

	if(isset($_GET['id_s'])){
		$id = $_GET['id_s'];

		$query = "DELETE from servicios where id_s='$id'";

		$result = mysql_query($query);

		if($result){
			echo "Borrado exitosamente... ";
			echo "<a href='editservicio.php'> Regresar! </a>";
		}
	}
	
?>