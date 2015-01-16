<?php
	require($_SERVER["DOCUMENT_ROOT"].'/lib/dao/DatosEscolaresDAO.php');
	require($_SERVER["DOCUMENT_ROOT"].'/lib/dao/MateriasInscritasDAO.php');
	require($_SERVER["DOCUMENT_ROOT"].'/lib/dao/HistorialAcademicoDAO.php');
	class ServiceDatosEscolares{
		
		public static function obtenerDatosEscolares($user){
			$datosEsc = new DatosEscolaresDAO();
			$datosncontrados = $datosEsc->consultarDatosEscolares($user);
			return $datosncontrados;
		}
		
		public static function obtenerMateriasInscritas($user){
			$materiasInscritas = new MateriasInscritasDAO();
			$materiasEncontradas = $materiasInscritas->consultarMateriasInscritas($user);
			return $materiasEncontradas;
		}
		
		public static function obtenerHistorialAcademico($user){
			$historialAcademico = new HistorialAcademicoDAO();
			$historialEncontrado  = $historialAcademico->consultarHistorialAcademico($user);
			return $historialEncontrado;
		}
	}
?>