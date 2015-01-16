<?php
	class MateriasInscritas{
		private $id;
		private $asignatura_id;
		private $periodo;
		private $grupo;
		private $calificacion;
		private $creditos;
		
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
		* @return MateriasInscritas{
		*/
		public function set_id($id)
		{
		$this->id = $id;
		return $this;
		}
		
			/**
		* Get asignatura_id
		*
		* @return VariableType
		*/
		public function get_asignatura_id()
		{
		return $this->asignatura_id;
		}
		
			/**
		* Set asignatura_id
		*
		* @param VariableType $asignatura_id
		* @return MateriasInscritas{
		*/
		public function set_asignatura_id($asignatura_id)
		{
		$this->asignatura_id = $asignatura_id;
		return $this;
		}
		
			/**
		* Get periodo
		*
		* @return VariableType
		*/
		public function get_periodo()
		{
		return $this->periodo;
		}
		
			/**
		* Set periodo
		*
		* @param VariableType $periodo
		* @return MateriasInscritas{
		*/
		public function set_periodo($periodo)
		{
		$this->periodo = $periodo;
		return $this;
		}
		
			/**
		* Get grupo
		*
		* @return VariableType
		*/
		public function get_grupo()
		{
		return $this->grupo;
		}
		
			/**
		* Set grupo
		*
		* @param VariableType $grupo
		* @return MateriasInscritas{
		*/
		public function set_grupo($grupo)
		{
		$this->grupo = $grupo;
		return $this;
		}
		
			/**
		* Get calificacion
		*
		* @return VariableType
		*/
		public function get_calificacion()
		{
		return $this->calificacion;
		}
		
			/**
		* Set calificacion
		*
		* @param VariableType $calificacion
		* @return MateriasInscritas{
		*/
		public function set_calificacion($calificacion)
		{
		$this->calificacion = $calificacion;
		return $this;
		}
		
			/**
		* Get creditos
		*
		* @return VariableType
		*/
		public function get_creditos()
		{
		return $this->creditos;
		}
		
			/**
		* Set creditos
		*
		* @param VariableType $creditos
		* @return MateriasInscritas{
		*/
		public function set_creditos($creditos)
		{
		$this->creditos = $creditos;
		return $this;
		}
}
?>
	