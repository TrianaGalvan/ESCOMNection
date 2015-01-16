<?php 
        require($_SERVER["DOCUMENT_ROOT"]."/lib/dao/UsuarioDAO.php");
        class Usuario{
            private $nombre;
            private $password;
            private $estatus;
            private $rol;
            private $fechaLast_login;
            private $fechaUltimate_login;

            //-----------------------------get y set ---------------------------------------------------
            public function getNombre(){
                return $this->nombre;
            }

            public function setNombre($nom){
                $this->nombre = $nom;
            }

            public function getPassword(){
                return $this->password;
            }

            public function setPassword($pass){
                $this->password = $pass;
            }

            public function getEstatus(){
                return $this->estatus;
            }

            public function setEstatus($estatus){
                $this->estatus = $estatus;
            }

            public function getRol(){
                return $this->rol;
            }

            public function setRol($rol){
                $this->rol = $rol;
            }

            public function getFechaLast_login(){
                return $this->fechaLast_login;
            }

            public function setFechaLast_login($fechal){
                $this->fechaLast_login = $fechal;
            }

            public function getFechaUltimate_login(){
                return $this->fechaUltimate_login;
            }

            public function setFechaUltimate_login($fechau){
                $this->fechaUltimate_login = $fechau;
            }

            //-------------------------------------------------------------------------------------

            //--------------------------Constructor------------------------------------------------
            function __construct(){
				//obtengo un array con los parámetros enviados a la función
				$params = func_get_args();
				//saco el número de parámetros que estoy recibiendo
				$num_params = func_num_args();
				//cada constructor de un número dado de parámtros tendrá un nombre de función
				//atendiendo al siguiente modelo __construct1() __construct2()...
				$funcion_constructor ='__construct'.$num_params;
				//compruebo si hay un constructor con ese número de parámetros
				if (method_exists($this,$funcion_constructor)) {
					//si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
					call_user_func_array(array($this,$funcion_constructor),$params);
				}
            }
            
            function __construct0(){
                
            }
			
            function __construct2($us,$ps){
                $this->nombre = $us;
                $this->password = $ps;
            }
			
			function __construct3($us,$pas,$rol){
				$this->nombre = $us;
				$this->password = $pas;
				$this->rol = $rol;
			}
            
        }
        
        
    
?>