<?php
	
	include("../conexion.php");

	$query = "SELECT * from Mobiliario";
	$result = mysql_query($query) or exit(mysql_error());
	$rows = mysql_num_rows($result);


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Apartar una Fecha</h1>

	<form action="apartarEvento.php" method="GET">
		<label>Introduce la fecha deseada: </label> <br>
		<input type="text" placeholder="ddmmaa" name="fecha">

		<br>
		<br>
		<h3>Mobiliario Deseado</h3>
		<table border="1">
			<tr>
				<td>Opcion</td>
				<td>Nombre</td>
				<td>Descripcion</td>
			</tr>

			<?php 
				while($row = mysql_fetch_assoc($result)){
					?>
					<?php echo $row['nombre'] ;?>

					<tr>
						<td><input type="checkbox" name="<?php echo $row['nombre'] ;?>"></td>
						<td><?php echo $row['nombre'] ;?></td>
						<td><?php echo $row['descripcion'] ;?></td>
					</tr>

					<?php
				}
			?>

		</table>




		<?php 
			$query = "SELECT * from servicios";
			$result = mysql_query($query) or exit(mysql_error());
			$rows = mysql_num_rows($result);
		?>

		<br>
		<h3>Servicios Deseados</h3>
		<table border="1">
			<tr>
				<td>Opcion</td>
				<td>Nombre</td>
				<td>Descripcion</td>
			</tr>

			<?php 
				while($row = mysql_fetch_assoc($result)){
					?>
					<?php echo $row['nombre'] ;?>

					<tr>
						<td><input type="checkbox" name="<?php echo $row['nombre'] ;?>"></td>
						<td><?php echo $row['nombre'] ;?></td>
						<td><?php echo $row['descripcion'] ;?></td>
					</tr>

					<?php
				}
			?>

		</table>
		<br>
		<input name="submit" type="submit" value="Apartar!">
	</form>

	<a href="index.php">Regresar!!</a>
	
</body>
</html>