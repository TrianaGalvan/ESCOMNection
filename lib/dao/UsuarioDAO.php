<?php
    require($_SERVER["DOCUMENT_ROOT"]."/lib/common/serviceDB.php");
    class UsuarioDAO{
    
        public function consultarUsuario($usuario){
            $conection = new ServiceDB();
            $conectionDB = $conection->iniciarConexion();
            $nombre = $usuario->getNombre();
            $stmt = $conectionDB->prepare("select Usuario,Password,Estatus,Rol from Usuario where usuario='$nombre'");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
			//Se econtro el nombre de el usuario en la base de datos 
            if(!empty($result)){
                foreach($result as $column => $valor){
                	//asignando los datos obtenidos de la base de datos
                    if( strcmp($column,"Usuario") == 0){
                        $usuarioNombre = $valor;
                    }
                    else if(strcmp($column,"Password") == 0){
                        $usuarioPassword = $valor;
                    }
                    else if(strcmp($column,"Rol") == 0){
                        $usuarioRol = $valor;
                    }
                }
				//Usuario encontrado en la base de datos
				$usuario = new Usuario($usuarioNombre,$usuarioPassword,$usuarioRol);
            }else{
            	//Usuario a Null debido a que no se encontraron coincidencias
                $usuario  = new Usuario(NULL,NULL,NULL);
            }
			$conection->cerrarConexion();
			return $usuario;  
        }//function
    }
    
?>