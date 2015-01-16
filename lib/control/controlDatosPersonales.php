<?php
	require($_SERVER["DOCUMENT_ROOT"]."/lib/services/serviceDatosPersonales.php");
	$user = $_SESSION["username"];
	//Obtener los datos generales de el usuario 
	$DatosGenerales = ServiceDatosPersonales::obtenerDatosPersonales($user);	
	//Obtener la direccion de el usuario
	$direccion = ServiceDatosPersonales::obtenerDireccion($user);
	//Obtener estado civil
	$estadoCivil = ServiceDatosPersonales::obtnerEstadoCivil($user);
	
?>

