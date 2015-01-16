<?php
	class Direccion{
		private $calle; 
		private $numExt;
		private $numInt;
		private $colonia;
		private $codigoPostal;
		private $municipio;
		private $estadoRepublica_id;
		
				/**
		* Get calle
		*
		* @return VariableType
		*/
		public function get_calle()
		{
		return $this->calle;
		}
		
			/**
		* Set calle
		*
		* @param VariableType $calle
		* @return Direccion{
		*/
		public function set_calle($calle)
		{
		$this->calle = $calle;
		return $this;
		}
		
			/**
		* Get numExt
		*
		* @return VariableType
		*/
		public function get_numExt()
		{
		return $this->numExt;
		}
		
			/**
		* Set numExt
		*
		* @param VariableType $numExt
		* @return Direccion{
		*/
		public function set_numExt($numExt)
		{
		$this->numExt = $numExt;
		return $this;
		}
		
			/**
		* Get numInt
		*
		* @return VariableType
		*/
		public function get_numInt()
		{
		return $this->numInt;
		}
		
			/**
		* Set numInt
		*
		* @param VariableType $numInt
		* @return Direccion{
		*/
		public function set_numInt($numInt)
		{
		$this->numInt = $numInt;
		return $this;
		}
		
			/**
		* Get colonia
		*
		* @return VariableType
		*/
		public function get_colonia()
		{
		return $this->colonia;
		}
		
			/**
		* Set colonia
		*
		* @param VariableType $colonia
		* @return Direccion{
		*/
		public function set_colonia($colonia)
		{
		$this->colonia = $colonia;
		return $this;
		}
		
			/**
		* Get codigoPostal
		*
		* @return VariableType
		*/
		public function get_codigoPostal()
		{
		return $this->codigoPostal;
		}
		
			/**
		* Set codigoPostal
		*
		* @param VariableType $codigoPostal
		* @return Direccion{
		*/
		public function set_codigoPostal($codigoPostal)
		{
		$this->codigoPostal = $codigoPostal;
		return $this;
		}
		
			/**
		* Get municipio
		*
		* @return VariableType
		*/
		public function get_municipio()
		{
		return $this->municipio;
		}
		
			/**
		* Set municipio
		*
		* @param VariableType $municipio
		* @return Direccion{
		*/
		public function set_municipio($municipio)
		{
		$this->municipio = $municipio;
		return $this;
		}
		
			/**
		* Get estadoRepublica_id
		*
		* @return VariableType
		*/
		public function get_estadoRepublica_id()
		{
		return $this->estadoRepublica_id;
		}
		
			/**
		* Set estadoRepublica_id
		*
		* @param VariableType $estadoRepublica_id
		* @return Direccion{
		*/
		public function set_estadoRepublica_id($estadoRepublica_id)
		{
		$this->estadoRepublica_id = $estadoRepublica_id;
		return $this;
		}
		
		//----contructores 
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
		
		function __construct6($calle,$ne,$ni,$col,$cp,$mun){
			$this->calle = $calle;
			$this->numExt = $ne;
			$this->numInt = $ni;
			$this->colonia = $col;	
			$this->codigoPostal = $cp;
			$this->municipio = $mun;
		}
		
	}

	
		
?>
	