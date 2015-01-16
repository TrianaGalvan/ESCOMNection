<?php
	class DatosEscolares{
		private $materiasInscritas_id;
		private $historialAcademico_id;
		private $creditosTotales;
		private $beca;
		private $tipoBeca;
		
				/**
		* Get materiasInscritas_id
		*
		* @return VariableType
		*/
		public function get_materiasInscritas_id()
		{
		return $this->materiasInscritas_id;
		}
		
			/**
		* Set materiasInscritas_id
		*
		* @param VariableType $materiasInscritas_id
		* @return DatosEscolares{
		*/
		public function set_materiasInscritas_id($materiasInscritas_id)
		{
		$this->materiasInscritas_id = $materiasInscritas_id;
		return $this;
		}
		
			/**
		* Get historialAcademico_id
		*
		* @return VariableType
		*/
		public function get_historialAcademico_id()
		{
		return $this->historialAcademico_id;
		}
		
			/**
		* Set historialAcademico_id
		*
		* @param VariableType $historialAcademico_id
		* @return DatosEscolares{
		*/
		public function set_historialAcademico_id($historialAcademico_id)
		{
		$this->historialAcademico_id = $historialAcademico_id;
		return $this;
		}
		
			/**
		* Get creditosTotales
		*
		* @return VariableType
		*/
		public function get_creditosTotales()
		{
		return $this->creditosTotales;
		}
		
			/**
		* Set creditosTotales
		*
		* @param VariableType $creditosTotales
		* @return DatosEscolares{
		*/
		public function set_creditosTotales($creditosTotales)
		{
		$this->creditosTotales = $creditosTotales;
		return $this;
		}
		
			/**
		* Get beca
		*
		* @return VariableType
		*/
		public function get_beca()
		{
		return $this->beca;
		}
		
			/**
		* Set beca
		*
		* @param VariableType $beca
		* @return DatosEscolares{
		*/
		public function set_beca($beca)
		{
		$this->beca = $beca;
		return $this;
		}
		
			/**
		* Get tipoBeca
		*
		* @return VariableType
		*/
		public function get_tipoBeca()
		{
		return $this->tipoBeca;
		}
		
			/**
		* Set tipoBeca
		*
		* @param VariableType $tipoBeca
		* @return DatosEscolares{
		*/
		public function set_tipoBeca($tipoBeca)
		{
		$this->tipoBeca = $tipoBeca;
		return $this;
		}
}	
	
?>
	