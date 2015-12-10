<?php
	
	if(isset($_POST['submit'])){
		//si entro bien
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$costo = $_POST['costo'];
		$descripcion = $_POST['descripcion'];

		// echo "el id es: ".$id;
		// echo $nombre.$costo.$descripcion;

		$query = "UPDATE servicios set costo_s='$costo' , nombre='$nombre', 
					descripcion='$descripcion' where id_s = '$id' ";

		$result = mysql_query($query);
		if($result){

		}




	}
		}


?>