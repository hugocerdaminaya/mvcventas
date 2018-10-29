<?php
	include "controllers\conexion.php";

	$query = "SELECT id_reparto, fecha FROM reparto";

	$resultado = mysqli_query($conn, $query);

	if(!$resultado){
		die("Error");		
	}
	else {
		while ($data = mysqli_fetch_assoc($resultado)){
			$arreglo["data"][] = $data;
		}
		echo json_encode($arreglo);
	}

	mysqli_free_result($resultado);
	mysqli_close($conn);
	
?>