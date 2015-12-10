<?php 
	
	include("../conexion.php");

	$query = "select * from evento";
	$result = mysql_query($query) or exit(mysql_error());

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1">
	<tr>
		<td>Fecha</td>
		<td>Nombre Cliente</td>
		<td>Costo</td>
		<td>Mobiliario</td>
		<td>Servicios</td>
	</tr>

	<?php 
		while($row = mysql_fetch_assoc($result)){
			$fecha = $row['fecha']; 
			$id_c = $row['id_c'];

			$querypersona = "Select nombre from cliente where id='$id_c' ";
			$resPer = mysql_query($querypersona);
			$per = mysql_fetch_assoc($resPer) or exit(mysql_error());
			$per = $per['nombre'];

			?>

			<?php echo $fecha ?>

			<tr>
				<td><?php echo $fecha ?></td> 
				<td><?php echo $per ?></td>
				<td><?php echo $row['costo_e'] ?></td>
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


				?>

				</td>
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

<a href="control.php">Regresar...</a>

</body>
</html>