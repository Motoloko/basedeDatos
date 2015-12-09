<?php
	include ("conexion.php");

	$nombre = $_POST['nombre'];
	$pass = $_POST['contrasena'];

	$query = "SELECT * from cliente where nombre='$nombre' and pass='$pass' ";
	$result = mysql_query($query);

	$rows = mysql_num_rows($result);

	// echo "lineas ".$rows." nombre=".$nombre." pass=".$pass." ";

	if($rows > 0){
		// encontro el usuario y la contraseña correctas
		$datos = mysql_fetch_assoc($result);
		session_start();
		$_SESSION['id'] = $datos['id'];
		$_SESSION['nombre'] = $datos['nombre'];
		$_SESSION['direccion'] = $datos['direccion'];
		$_SESSION['telefono'] = $datos['telefono'];
		$_SESSION['pass'] = $datos['pass'];
		$_SESSION['correo'] = $datos['correo'];
		$_SESSION['fullname'] = $datos['fullname'];

		echo "Bienvenido ".$_SESSION['nombre'];
		// echo "<a href='testsesion.php'>prueba sesion</a>";
		header("Location: usuario");
	}
	else{
		// no encontro nada
		echo "No existe ningun usuario con esos datos...";
	}
?>