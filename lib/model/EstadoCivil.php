<?php
	class EstadoCivil{
		private $id;
		private $EstadoCivil;	
		
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
		* @return EstadoCivil{
		*/
		public function set_id($id)
		{
		$this->id = $id;
		return $this;
		}
		
			/**
		* Get EstadoCivil
		*
		* @return VariableType
		*/
		public function get_EstadoCivil()
		{
		return $this->EstadoCivil;
		}
		
			/**
		* Set EstadoCivil
		*
		* @param VariableType $EstadoCivil
		* @return EstadoCivil{
		*/
		public function set_EstadoCivil($EstadoCivil)
		{
		$this->EstadoCivil = $EstadoCivil;
			return $this;
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
		
		function __construct1($ec){
			$this->EstadoCivil = $ec;
		}
	}
?>
	