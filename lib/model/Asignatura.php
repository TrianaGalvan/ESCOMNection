<?php 
	class Asignatura{
		private $id;
		private $nombre;
		private $nivel;
		
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
		* @return Asignatura{
		*/
		public function set_id($id)
		{
		$this->id = $id;
		return $this;
		}
		
			/**
		* Get nombre
		*
		* @return VariableType
		*/
		public function get_nombre()
		{
		return $this->nombre;
		}
		
			/**
		* Set nombre
		*
		* @param VariableType $nombre
		* @return Asignatura{
		*/
		public function set_nombre($nombre)
		{
		$this->nombre = $nombre;
		return $this;
		}
		
			/**
		* Get nivel
		*
		* @return VariableType
		*/
		public function get_nivel()
		{
		return $this->nivel;
		}
		
			/**
		* Set nivel
		*
		* @param VariableType $nivel
		* @return Asignatura{
		*/
		public function set_nivel($nivel)
		{
		$this->nivel = $nivel;
		return $this;
		}
}	
?>
