<?php
	require($_SERVER["DOCUMENT_ROOT"]."/lib/services/serviceDatosEscolares.php");
	$user = $_SESSION["username"];
	
	//Obtener informacion de la tabla de Datos escolares.
	ServiceDatosEscolares::obtenerDatosEscolares($user);
	//Obtener las materias inscritas actualmente
	ServiceDatosEscolares::obtenerMateriasInscritas($user);
	//Obtener historial académico del alumno 
	ServiceDatosEscolares::obtenerHistorialAcademico($user);
	
?>