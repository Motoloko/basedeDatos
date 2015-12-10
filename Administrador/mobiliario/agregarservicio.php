<?php
	include ("../../conexion.php");

	if(isset($_POST['submit'])){
		//si se envio informacion
		$nombre = $_POST['nombre'];
		$descripcion= $_POST['descripcion'];

		if($nombre == "" || $descripcion == ""){
			echo "Existen campos vacios. se debe llenar todo.";
		}
		else{
			//si esta todo completo
			$query = "INSERT INTO mobiliario (nombre,descripcion) 
				values ('$nombre', '$descripcion')";

			$result = mysql_query($query) or exit(mysql_error());

			if($result == 1){
				echo "Almacenado exitosamente";
				echo "<a href='editservicio.php'> Regresar! </a>";
			}
			else
				echo "Error al guardar...";
		}
	}
	else{
		echo  "no deverias estar aqui....";
	}


?>