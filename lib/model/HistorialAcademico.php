<?php 
	class HistorialAcademico{
		private $id;
		private $asignatura_id;
		private $periodo;
		private $calificacion;
		private $creditos;
		private $tipoEvaluacion; 
		
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
		* @return HistorialAcademico{
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
		* @return HistorialAcademico{
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
		* @return HistorialAcademico{
		*/
		public function set_periodo($periodo)
		{
		$this->periodo = $periodo;
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
		* @return HistorialAcademico{
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
		* @return HistorialAcademico{
		*/
		public function set_creditos($creditos)
		{
		$this->creditos = $creditos;
		return $this;
		}
		
			/**
		* Get tipoEvaluacion
		*
		* @return VariableType
		*/
		public function get_tipoEvaluacion()
		{
		return $this->tipoEvaluacion;
		}
		
			/**
		* Set tipoEvaluacion
		*
		* @param VariableType $tipoEvaluacion
		* @return HistorialAcademico{
		*/
		public function set_tipoEvaluacion($tipoEvaluacion)
		{
		$this->tipoEvaluacion = $tipoEvaluacion;
		return $this;
		}
}
?>
	