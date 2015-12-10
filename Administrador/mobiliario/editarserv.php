<?php
	
	include ("../../conexion.php");

	if(isset($_GET['id_m'])){

		$id = $_GET['id_m'];

		$query = "SELECT * FROM mobiliario where id_m='$id'";
		$result = mysql_query($query) or exit(mysql_error());

		$row = mysql_fetch_assoc($result);

		$nombre = $row['nombre'];
		$descripcion = $row['descripcion'];

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Editar servicio</h2>

	
	<form action="guardareditserv.php" method="POST">
		<label>Nombre: </label><input name="nombre" type="text" value="<?php echo $nombre; ?>"><br>
		<label>Descripcion: </label><input name="descripcion" type="text" value="<?php echo $descripcion; ?>">	
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input name="submit" type="submit">
	</form>
	


</body>
</html>