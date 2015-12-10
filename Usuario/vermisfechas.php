<?php
	include ("../conexion.php");
	session_start();

	$nombre = $_SESSION['nombre'];
	$id = $_SESSION['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal de Usuario</title>
</head>
<body>
	<h2>Hola otra vez <?php echo $nombre ?> </h2>

	<table border="1">
		<tr>
			<td>Fecha</td>
			<td>Servicios</td>
			<td>Mobiliario</td>
		</tr>


		<?php 
			$query = "SELECT * from evento where id_c='$id'";
			$result = mysql_query($query) or exit(mysql_error());

			while($row = mysql_fetch_assoc($result)){
				$fecha = $row['fecha'];
				?>

				<tr>
					<td>  <?php echo $fecha ?> </td>
					<td>
						
						<?php
					$qmob = "Select id_m from mobiliariodelevento where fecha='$fecha' ";
					$qres = mysql_query($qmob) or exit(mysql_error());

					while($linea = mysql_fetch_assoc($qres)){
						$idm = $linea['id_m'];
					$queryLoco = "Select nombre from mobiliario where id_m = '$idm'";
					$resloco = mysql_query($queryLoco) or exit(mysql_error());
					$lineamobiliario = mysql_fetch_assoc($resloco);
						echo $lineamobiliario['nombre']."<br>";
					}


				?></td>

				<td>
					<?php
					$qmob = "Select id_s from serviciosdelevento where fecha='$fecha' ";
					$qres = mysql_query($qmob) or exit(mysql_error());

					while($linea = mysql_fetch_assoc($qres)){
						$idm = $linea['id_s'];
					$queryLoco = "Select nombre from servicios where id_s = '$idm'";
					$resloco = mysql_query($queryLoco) or exit(mysql_error());
					$lineamobiliario = mysql_fetch_assoc($resloco);
						echo $lineamobiliario['nombre']."<br>";
					}


				?>

				</td>

				</tr>
				<?php
			}
		?>



	</table>
	

	<a href="index.php">Regresar...</a>
</body>
</html>