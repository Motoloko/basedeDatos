<!DOCTYPE html>
<html>
<head>
	<title>Acceso y Registro a clientes</title>
</head>
<body>

	<form name="login" action="loginUsuario.php" method="post">
		<h2>Inicia Sesion!</h2>
		<label>Usuario:</label> <input type="text" name="nombre"><br>
		<label>Contraseña:</label> <input type="text" name="contrasena"><br>
		<input type="submit">
	</form>

	<form name="registrar" action="registrarUsuario.php" method="post">
		<h2>Registrate!</h2>
		<label>Usuario:</label> <input type="text" name="nombre"><br>
		<label>Nombre completo:</label> <input type="text" name="fullname"><br>
		<label>Direccion:</label> <input type="text" name="direccion"><br>
		<label>Telefono:</label> <input type="text" name="telefono"><br>
		<label>Correo:</label> <input type="text" name="correo"><br>
		<label>Contraseña:</label> <input type="text" name="contrasena"><br>
		<input type="submit">
	</form>

</body>
</html>