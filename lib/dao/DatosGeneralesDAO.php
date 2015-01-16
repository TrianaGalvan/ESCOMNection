<?php
	require($_SERVER["DOCUMENT_ROOT"]."/lib/model/DatosGenerales.php");
	require($_SERVER["DOCUMENT_ROOT"]."/lib/common/serviceDB.php");
	class DatosGeneralesDAO{
		public function consultarDatosPersonales($user){
			$conection = new serviceDB();
            $conectionDB = $conection->iniciarConexion();
			$stmt = $conectionDB->prepare("SELECT datosgenerales.Nombre, datosgenerales.ApPat,datosgenerales.ApMat,datosgenerales.CURP,datosgenerales.Sexo,datosgenerales.FechaNacimiento,datosgenerales.Nacionalidad,datosgenerales.Telefono,datosgenerales.Movil,datosgenerales.Correo
										FROM Usuario
										INNER JOIN alumno on Usuario.usuario = alumno.usuario_usuario
										INNER JOIN datosgenerales on datosgenerales.id = alumno.datosGenerales_id
										where Usuario.usuario = '$user';");
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			
			
			$ApMaterno = NULL;
			
			//verificando que se hayan devuelto valores de la consulta 
			if(!empty($result)){
				foreach ($result as $key => $value) {
					if(strcmp($key,"Nombre") == 0){
						$Nombre = $value;			
					}
					else if(strcmp($key, "ApPat") == 0){
						$ApPaterno = $value;
					}
					else if(strcmp($key, "ApMat") == 0){
						$ApMaterno = $value;
					}
					else if(strcmp($key, "CURP")== 0){
						$curp  = $value;
					}
					else if(strcmp($key,"Sexo")== 0){
						$sexo = $value;
					}
					else if(strcmp($key, "FechaNacimiento") == 0){
						$FechaNac = $value;
					}
					else if(strcmp($key,"Telefono")== 0){
						$tel = $value;
					}
					else if(strcmp($key, "Movil")== 0){
						$mov = $value;
					}
					else if(strcmp($key, "Correo")== 0){
						$correo = $value;
					}
					//Creando el objeto de DatosGenerales
				}
				$datosgenerales = new DatosGenerales($Nombre,$ApPaterno,$ApMaterno,$curp,$sexo,$FechaNac,$tel,$mov,$correo);
				
				
			}
			else{
				//Objeto vacio 
				$datosgenerales = new DatosGenerales(NULL);
			}
			
			$conection->cerrarConexion(); 
			return $datosgenerales;	
			
			//Asignando los valores de la consulta a un arreglo
		}
	}
?>