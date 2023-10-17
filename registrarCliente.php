<?php 
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	include_once('conexion.php');
	$nombre = $_POST['nombre'];
	$ape_paterno = $_POST['ape_paterno'];
	$ape_materno = $_POST['ape_materno'];
	$edad = 18;
	$antecedente = $_POST['antecedente'];
	$direccion = $_POST['direccion'];
	$dni = $_POST['dni'];
	$estado = $_POST['estado'];
	$felcc = $_POST['felcc'];
	$felcv = $_POST['felcv'];
	$grado = $_POST['grado'];
	$operatividad = $_POST['operatividad'];
	
	$sql = "INSERT INTO cliente (nombre, ape_paterno, ape_materno, edad, direccion, dni, estado, felcc, felcn, grado, operatividad, antecedente) 
				VALUES ('$nombre', '$ape_paterno', '$ape_materno', $edad, '$direccion', '$dni', 1, '$felcc', '$felcv', '$grado', '$operatividad', '$antecedente');";
	
	$res = mysqli_query($conn,$sql);
	if ( isset( $res ) )
		echo "correcto";
	else
		echo "error";	

?>
