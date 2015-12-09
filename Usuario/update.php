<?php
	include ("../conexion.php");

	session_start();

	$lastnombre = $_SESSION['nombre'];

	$nombre = $_POST['nombre'];
	$fullname = $_POST['fullname'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$pass = $_POST['pass'];

	$query = "select id from cliente where nombre='$lastnombre' ";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);

	$id = $row['id'];


	$query = "UPDATE cliente set nombre='$nombre' , fullname='$fullname' , direccion='$direccion' , 
				telefono='$telefono' , correo='$correo' , pass='$pass' where id='$id' ";
	$result = mysql_query($query) or exit(mysql_error());

	if($result == 1)
		echo "Se modifico exitosamente.";
		echo "<br><a href='index.php'> Continuar... </a>";

	$_SESSION['id'] = $id;
	$_SESSION['nombre'] = $nombre;
	$_SESSION['direccion'] = $direccion;
	$_SESSION['telefono'] = $telefono;
	$_SESSION['pass'] = $pass;
	$_SESSION['correo'] = $correo;
	$_SESSION['fullname'] = $fullname;


?>