<?php
	session_start();
	$nombre = $_SESSION['nombre'];


?>


<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal de Usuario</title>
</head>
<body>
	<h2>Hola otra vez <?php echo $nombre ?> </h2>

	Opciones:
	<ul>
		<li> <a href="editardatos.php">Editar Datos Personales</a> </li>
		<li> <a href="apartarFecha.php">Rentar una Fecha</a> </li>
		<!-- <li> <a href="#">Modificar una Fecha</a> </li> -->

	</ul>

	<a href="../">Salir!</a>
</body>
</html>