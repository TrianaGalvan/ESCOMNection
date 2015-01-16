<?php
	require($_SERVER["DOCUMENT_ROOT"].'/lib/dao/DatosGeneralesDAO.php');
	require($_SERVER["DOCUMENT_ROOT"].'/lib/dao/DireccionDAO.php');
	require($_SERVER["DOCUMENT_ROOT"].'/lib/dao/EstadoCivilDAO.php');
	class ServiceDatosPersonales{
		public static function obtenerDatosPersonales($user){
			$datosGenerales = new DatosGeneralesDAO();
			$datosPersonales = $datosGenerales->consultarDatosPersonales($user);
			return $datosPersonales;
		}
		
		public static function obtenerDireccion($user){
			$direccion = new DireccionDAO();
			$Direccion = $direccion->consultarDireccion($user);
			return $Direccion;
		}
		
		public static function obtnerEstadoCivil($user){
			$estadoCivil = new EstadoCivilDAO();
			$estadoCivilObtenido = $estadoCivil->consultarEstadoCivil($user);
			return $estadoCivilObtenido;
		}
	}
?>