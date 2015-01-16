<?php
	require($_SERVER["DOCUMENT_ROOT"]."/lib/model/EstadoCivil.php");
	class EstadoCivilDAO{
		
		public function consultarEstadoCivil($user){
			$conection = new ServiceDB();
            $conectionDB = $conection->iniciarConexion();
			$stmt = $conectionDB->prepare("SELECT EstadoCivil.EstadoCivil
										FROM Usuario 
										INNER JOIN alumno on Usuario.usuario = alumno.usuario_usuario
										INNER JOIN datosgenerales on datosgenerales.id = alumno.datosGenerales_id
										INNER JOIN EstadoCivil on datosgenerales.estadocivil_id = EstadoCivil.ID
										WHERE Usuario.usuario = '$user';");
			$stmt->execute();
			$estadoCivil = $stmt->fetch(PDO::FETCH_ASSOC);
			
			if(!empty($estadoCivil)){
				$estadoCivilEncontrado = new EstadoCivil($estadoCivil["EstadoCivil"]);	
			}
			else{
				$estadoCivilEncontrado = new EstadoCivil(NULL);
			}
			
			$conection->cerrarConexion();
			return $estadoCivilEncontrado;
					
		}
	}
?>