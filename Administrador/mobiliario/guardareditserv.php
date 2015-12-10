<?php

	include ("../../conexion.php");
	
	if(isset($_POST['submit'])){
		//si entro bien
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];

		// echo "el id es: ".$id;
		// echo $nombre.$costo.$descripcion;

		$query = "UPDATE mobiliario set nombre='$nombre', 
					descripcion='$descripcion' where id_m = '$id' ";

		$result = mysql_query($query) or exit(mysql_error());
		if($result){
			echo "Edicion completa";
			echo "<br><a href='editservicio.php'>Regresar..</a>";
		}
		else{
			echo "error";
		}




	}
		


?>