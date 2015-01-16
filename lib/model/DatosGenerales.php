<?php 
	require($_SERVER["DOCUMENT_ROOT"]."/lib/common/config.php");
	class DatosGenerales{
		private $id;
		private $nombre;
		private $ApPat;
		private $ApMat;
		private $curp;
		private $sexo;
		private $EstadoCivil_id;
		private $FechaNac;
		private $Nacionalidad;
		private $EstadoRepublica_id;
		private $telefono;
		private $movil;
		private $correo;
		private $direccion_id;
		
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
		* @return DatosGenerales{
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
		* @return DatosGenerales{
		*/
		public function set_nombre($nombre)
		{
			$this->nombre = $nombre;
			return $this;
		}
		
			/**
		* Get ApPat
		*
		* @return VariableType
		*/
		public function get_ApPat()
		{
			return $this->ApPat;
		}
		
			/**
		* Set ApPat
		*
		* @param VariableType $ApPat
		* @return DatosGenerales{
		*/
		public function set_ApPat($ApPat)
		{
			$this->ApPat = $ApPat;
			return $this;
		}
		
			/**
		* Get ApMat
		*
		* @return VariableType
		*/
		public function get_ApMat()
		{
			return $this->ApMat;
		}
		
			/**
		* Set ApMat
		*
		* @param VariableType $ApMat
		* @return DatosGenerales{
		*/
		public function set_ApMat($ApMat)
		{
			$this->ApMat = $ApMat;
			return $this;
		}
		
			/**
		* Get curp
		*
		* @return VariableType
		*/
		public function get_curp()
		{
			return $this->curp;
		}
		
			/**
		* Set curp
		*
		* @param VariableType $curp
		* @return DatosGenerales{
		*/
		public function set_curp($curp)
		{
			$this->curp = $curp;
			return $this;
		}
		
			/**
		* Get sexo
		*
		* @return VariableType
		*/
		public function get_sexo()
		{
			return $this->sexo;
		}
		
			/**
		* Set sexo
		*
		* @param VariableType $sexo
		* @return DatosGenerales{
		*/
		public function set_sexo($sexo)
		{
			$this->sexo = $sexo;
			return $this;
		}
		
			/**
		* Get EstadoCivil_id
		*
		* @return VariableType
		*/
		public function get_EstadoCivil_id()
		{
			return $this->EstadoCivil_id;
		}
		
			/**
		* Set EstadoCivil_id
		*
		* @param VariableType $EstadoCivil_id
		* @return DatosGenerales{
		*/
		public function set_EstadoCivil_id($EstadoCivil_id)
		{
			$this->EstadoCivil_id = $EstadoCivil_id;
			return $this;
		}
		
			/**
		* Get FechaNac
		*
		* @return VariableType
		*/
		public function get_FechaNac()
		{
			return $this->FechaNac;
		}
		
			/**
		* Set FechaNac
		*
		* @param VariableType $FechaNac
		* @return DatosGenerales{
		*/
		public function set_FechaNac($FechaNac)
		{
			$this->FechaNac = $FechaNac;
			return $this;
		}
		
			/**
		* Get Nacionalidad
		*
		* @return VariableType
		*/
		public function get_Nacionalidad()
		{
			return $this->Nacionalidad;
		}
		
			/**
		* Set Nacionalidad
		*
		* @param VariableType $Nacionalidad
		* @return DatosGenerales{
		*/
		public function set_Nacionalidad($Nacionalidad)
		{
			$this->Nacionalidad = $Nacionalidad;
			return $this;
		}
		
			/**
		* Get EstadoRepublica_id
		*
		* @return VariableType
		*/
		public function get_EstadoRepublica_id()
		{
			return $this->EstadoRepublica_id;
		}
		
			/**
		* Set EstadoRepublica_id
		*
		* @param VariableType $EstadoRepublica_id
		* @return DatosGenerales{
		*/
		public function set_EstadoRepublica_id($EstadoRepublica_id)
		{
			$this->EstadoRepublica_id = $EstadoRepublica_id;
			return $this;
		}
		
			/**
		* Get telefono
		*
		* @return VariableType
		*/
		public function get_telefono()
		{
			return $this->telefono;
		}
		
			/**
		* Set telefono
		*
		* @param VariableType $telefono
		* @return DatosGenerales{
		*/
		public function set_telefono($telefono)
		{
			$this->telefono = $telefono;
			return $this;
		}
		
			/**
		* Get movil
		*
		* @return VariableType
		*/
		public function get_movil()
		{
			return $this->movil;
		}
		
			/**
		* Set movil
		*
		* @param VariableType $movil
		* @return DatosGenerales{
		*/
		public function set_movil($movil)
		{
			$this->movil = $movil;
			return $this;
		}
		
			/**
		* Get correo
		*
		* @return VariableType
		*/
		public function get_correo()
		{
			return $this->correo;
		}
		
			/**
		* Set correo
		*
		* @param VariableType $correo
		* @return DatosGenerales{
		*/
		public function set_correo($correo)
		{
			$this->correo = $correo;
			return $this;
		}
		
			/**
		* Get direccion_id
		*
		* @return VariableType
		*/
		public function get_direccion_id()
		{
			return $this->direccion_id;
		}
		
			/**
		* Set direccion_id
		*
		* @param VariableType $direccion_id
		* @return DatosGenerales{
		*/
		public function set_direccion_id($direccion_id)
		{
			$this->direccion_id = $direccion_id;
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
		
		function __construct9($nombre,$ApPat,$ApMat,$curp,$sexo,$fechaNac,$tel,$mov,$correo){
			$this->nombre = $nombre;
			$this->ApMat = $ApMat;
			$this->ApPat = $ApPat;
			$this->FechaNac = $fechaNac;
			$this->curp = $curp;
			$this->sexo = $sexo;
			$this->telefono = $tel;
			$this->movil = $mov;
			$this->correo = $correo;
		}
		
		
			
	}
	
?>
	