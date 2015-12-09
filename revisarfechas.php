<?php
	include ("conexion.php");

	if(isset($_POST['submit'])){
		//si se mando la peticion
		$fecha = $_POST['fecha'];

		if(strlen($fecha) != 6){
			echo "<script type='text/javascript'>alert('No se encuentra en el formato!');</script>";
		}
		else{
			//si esta bien escrita la fecha
			$query = "SELECT * from evento where fecha=$fecha";
			$result = mysql_query($query);
			$row = mysql_num_rows($result);

			if($row == 0){
				// fecha disponible
				echo "<script type='text/javascript'>alert('Esa fecha esta disponible para rentar!');</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Esa fecha ya esta ocupada!');</script>";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Revisar Fechas</title>
</head>
<body>	

	<form method="POST" action="revisarfechas.php">
		<label>Inserta la fecha deseada: </label><br>
		<input type="text" name="fecha" placeholder="ddmmaa"><br>
		<input type="submit" name="submit" value="Buscar...">
	</form>
	
	<!-- Aqui se mostrara los resultados -->
	<div id="resultados">
		

	</div>

</body>

</html>