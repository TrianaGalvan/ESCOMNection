<?php
	class EstadoRepublica{
		private $id;
		private $entidad;
		
				/**
		* Get id
		*
		* @return VariableType
		*/
		public function get_id()
		{
		return $this->id;
		}
		
			/**
		* Set id
		*
		* @param VariableType $id
		* @return EstadoRepublica{
		*/
		public function set_id($id)
		{
		$this->id = $id;
		return $this;
		}
		
			/**
		* Get entidad
		*
		* @return VariableType
		*/
		public function get_entidad()
		{
		return $this->entidad;
		}
		
			/**
		* Set entidad
		*
		* @param VariableType $entidad
		* @return EstadoRepublica{
		*/
		public function set_entidad($entidad)
		{
		$this->entidad = $entidad;
		return $this;
		}
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
	
?>
	