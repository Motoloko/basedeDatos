<?php
	include ("../conexion.php");

	if(isset($_POST['submit'])){
		//si se envio informacion
		$nombre = $_POST['nombre'];
		$costo = $_POST['costo_s'];
		$descripcion= $_POST['descripcion'];

		if($nombre == "" || $costo == "" || $descripcion == ""){
			echo "Existen campos vacios. se debe llenar todo.";
		}
		else{
			//si esta todo completo
			$query = "INSERT INTO servicios (costo_s,nombre,descripcion) 
				values ('$costo' , '$nombre', '$descripcion')";

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