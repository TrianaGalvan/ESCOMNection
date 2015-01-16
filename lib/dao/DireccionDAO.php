<?php 
	require($_SERVER["DOCUMENT_ROOT"]."/lib/model/Direccion.php");
	
	class DireccionDAO{
			
		public function consultarDireccion($user){
			$conection = new ServiceDB();
        	$conectionDB = $conection->iniciarConexion();
			$stmt = $conectionDB->prepare("SELECT direccion.calle,direccion.NumExt,direccion.NumInt,direccion.colonia,direccion.CodigoPostal,direccion.municipio
										FROM Usuario 
										INNER JOIN alumno on Usuario.usuario = alumno.usuario_usuario
										INNER JOIN datosgenerales on datosgenerales.id = alumno.datosGenerales_id
										INNER JOIN direccion on direccion.id = datosgenerales.direccion_id
										where Usuario.usuario = '$user';");	
		
			$stmt->execute();
			$direccion = $stmt->fetch(PDO::FETCH_ASSOC);
			
			if(!empty($direccion)){
				foreach ($direccion as $key => $value) {
					if(strcmp($key, "calle") == 0){
						$calle = $value;
					}
					else if(strcmp($key, "NumExt") == 0){
						$numExt  = $value;
					}
					else if(strcmp($key, "NumInt") == 0){
						$NumInt = $value;
					}
					else if(strcmp($key,"colonia") == 0){
						$col = $value;
						$colutf = utf8_encode($col);
					}
					else if(strcmp($key,"CodigoPostal") == 0){
						$codigoP = $value;
					}
					else if(strcmp($key, "municipio")== 0){
						$municipio = $value;
					}
				}
				$dir = new Direccion($calle,$numExt,$NumInt,$colutf,$codigoP,$municipio);
			}
			else{
				$dir = new Direccion(NULL);
			}
			
			$conection->cerrarConexion();
			return $dir;
			
		}	
		
	}
?>