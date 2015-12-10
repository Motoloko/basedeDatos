<?php 

	include ("../../conexion.php");

	$query = "SELECT * FROM mobiliario";
	$result = mysql_query($query);

	$rows = mysql_num_rows($result);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Edicion de Mobiliario</h2>

<table border="1">
	<tr>
		<td>ID_m</td>
		<td>Nombre</td>
		<td>Descripcion</td>
		<td>Editar</td>
		<td>Borrar</td>
	</tr>

	<?php

		if($rows > 0){
			while($row = mysql_fetch_assoc($result)){
				?>
				<tr>
					<td><?php echo $row['id_m']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
					<td><a href="editarserv.php?id_m=<?php echo $row['id_m']?>">Editar!</a> 
					<td><a href="borrarserb.php?id_m=<?php echo $row['id_m']?>">Borrar!</a>
				</tr>

			<?php
			}
		}

	?>

</table>


	<h3>Agregar Servicios</h3>
	<form method="POST" action="agregarservicio.php">
		<label>Nombre: </label> <input type="text" name="nombre"><br>
		<label>Descripcion: </label> <textarea name="descripcion"> </textarea><br>
		<input name="submit" type="submit" >
	</form>

</body>
</html>


<!-- <input type="text" name="descripcion"> -->