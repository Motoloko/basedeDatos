<?php
	session_start();
	
	$nombre = $_SESSION['nombre'];
	$fullname = $_SESSION['fullname'];
	$direccion = $_SESSION['direccion'];
	$telefono = $_SESSION['telefono'];
	$correo = $_SESSION['correo'];
	$pass = $_SESSION['pass'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Editar Datos</title>
</head>
<body>
	<h3>Editar Datos</h3>

	<form name="registrar" action="update.php" method="POST">
		<label>Usuario:</label> <input type="text" name="nombre" value=<?php echo $nombre ?>><br>
		<label>Nombre completo:</label> <input type="text" name="fullname" value=<?php echo $fullname ?>><br>
		<label>Direccion:</label> <input type="text" name="direccion" value=<?php echo $direccion ?>><br>
		<label>Telefono:</label> <input type="text" name="telefono" value=<?php echo $telefono ?>><br>
		<label>Correo:</label> <input type="text" name="correo" value=<?php echo $correo ?>><br>
		<label>Contraseña:</label> <input type="text" name="pass" value=<?php echo $pass ?>><br>
		<input type="submit">
	</form>


	

</body>
</html>