<?php 
	class Alumno{
		private $fotografia;
		private $DatosGenerales_id;
		private $DatosEscolares_id;
		private $Complementarios_id;
		private $Usuario_usuario;
		private $cv_id;
		private $privacidad_id;
		private $imprimirCV_id; 
		
		public function getFotografia(){
			return $fotografia;
		}
		
		public function getDatosEscolaresId(){
			return $DatosGenerales_id;
		}
		
		public function getDatosEscolaresId(){
			return $DatosEscolares_id;
		}
		
		public function getComplementariosId(){
			return $Complementarios_id;
		}
		
		public function getUsuario(){
			return $Usuario_usuario;
		}
		
		public function getCvId(){
			return $cv_id;
		}
		
		public function getPrivacidadId(){
			return $privacidad_id;
		}
		
		public function getImprimirCvId(){
			return $imprimirCV_id;
		}
		
		//----------------Set
		public function setFotografia($foto){
			$this->fotografia = $foto;
		}
		
		public function setDatosEscolaresId($dataid){
			$this->DatosEscolares_id=$dataid;
		}
		
		public function setDatosEscolaresId($dataid){
			$this->DatosEscolares_id = $dataid;
		}
		
		public function setComplementariosId($compid){
			$this->Complementarios_id = $compid;
		}
		
		public function setUsuario($usid){
			$this->Usuario_usuario = $usid;
		}
		
		public function setCvId($cvid){
			$this->cv_id = $cvid;
		}
		
		public function setPrivacidadId($pid){
			$this->privacidad_id = $pid;
		}
		
		public function setImprimirCvId($impid){
			$this->imprimirCV_id = $impid;
		}
		
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
		
	}
?>