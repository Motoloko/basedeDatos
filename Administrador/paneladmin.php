<!DOCTYPE html>
<html>
<head>
	<title>Panel de administracion</title>
	<script type="text/javascript" src="../js/funciones.js"></script>
</head>
<body>

	
		<label>Contraseña del administrador:</label> 
		<input type="password" id="pass" onkeypress="revisarPass();"><br>
		<input type="button" value="Entrar..." onclick="revisarPass();">
	

	<a href="../">Salir</a>
	<div id="resultados">
		
		<!-- <a href="#">Dar de alta</a><br>
		<a href="#">Dar de baja</a><br>
		<a href="#">Cambios</a> -->

	</div>


</body>
</html>