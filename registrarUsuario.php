<?php
	include ("conexion.php");

	$nombre = $_POST['nombre'];
	$fullname = $_POST['fullname'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$pass = $_POST['contrasena'];

	$query = "SELECT nombre from cliente where nombre='$nombre'";
	$result = mysql_query($query);

	$rows = mysql_num_rows($result);

	if($rows > 0)
		echo "Ya existe un usuario con ese nombre";
	else{
		//Si se puede almacenar el usuario
		if ($fullname == "" || $direccion == "" || $telefono == "" || $correo == "" || $pass == "" || $nombre == "")
			echo "Existen Campos vacios, llenalos!";
		else{
			//Si se puede registrar al usuario

			$query = "INSERT INTO cliente (nombre,fullname,direccion,telefono,correo,pass) values 
					  ('$nombre','$fullname','$direccion','$telefono','$correo','$pass') ";

			$result = mysql_query($query) or exit("Sqlerror ".mysql_error());

			if($result == true){
				echo "Exito al registrarse!";
				session_start();

				$query = "SELECT id from cliente where nombre='$nombre'";
				$result = mysql_query($query);
				$linea = mysql_fetch_assoc($result);

				$_SESSION['id'] = $linea['id'];
				$_SESSION['nombre'] = $nombre;
				$_SESSION['direccion'] = $direccion;
				$_SESSION['telefono'] = $telefono;
				$_SESSION['pass'] = $pass;
				$_SESSION['correo'] = $correo;
				$_SESSION['fullname'] = $fullname;

				// sleep(2);
				// header('Location: /index.php');
				//echo "El id es: " . $_SESSION['id'];
			}
		}
	}



?>