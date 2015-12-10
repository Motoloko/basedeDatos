<?php

	include ("../conexion.php");


	$fecha = $_GET['fecha'];

	$query = "select fecha from evento where fecha='$fecha'";
	$result = mysql_query($query) or exit(mysql_error());
	$rows = mysql_num_rows($result);

	if($rows == 0){


		if(strlen($fecha) != 6){
			echo "La fecha no estaba en el formato correcto";
		}
		else{
			
			$query = "select nombre,id_m from mobiliario";
			$result = mysql_query($query);
			
			while($row = mysql_fetch_assoc($result)){
				if(isset($_GET[$row['nombre']])){
					//aqui es la magia loca
					// echo $row['nombre']." ";
					// echo $row['id_m']."<br>";
					$id = $row['id_m'];
					$querysalvar = "insert into mobiliariodelevento (fecha,id_m) 
					values ('$fecha','$id') ";
					// echo $querysalvar."<br>";

					$resultado = mysql_query($querysalvar) or exit(mysql_error());
				}


			}


			$query = "select nombre,id_s from servicios";
			$result = mysql_query($query);
			
			while($row = mysql_fetch_assoc($result)){
				if(isset($_GET[$row['nombre']])){
					//aqui es la magia loca
					// echo $row['nombre']." ";
					// echo $row['id_m']."<br>";
					$id = $row['id_s'];
					$querysalvar = "insert into serviciosdelevento (fecha,id_s) 
					values ('$fecha','$id') ";
					// echo $querysalvar."<br>";

					$resultado = mysql_query($querysalvar) or exit(mysql_error());
				}


			}

			$query = "insert into evento (fecha,costo_e,hora_i,hora_f)
					values ('$fecha',1600,12,9)";

			$result = mysql_query($query) or exit(mysql_error());

			if($result){
				echo "Su evento fue registrado con exito!";
				
			}
			else
				echo "Error al guardar!";

			echo "<a href='index.php'>Regresar...</a>";	

			

		}

	}
	else
		echo "Fecha ya ocupada!";



	


?>