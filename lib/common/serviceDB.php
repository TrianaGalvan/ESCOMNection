<?php 
    class ServiceDB{
        	
        private $user = "root";
        private $password  = "root";
        private $serverName = "localhost";
        private $DBName = "ADOO";


        public function iniciarConexion(){
            try{
                $conn = new PDO("mysql:host=$this->serverName;dbname=$this->DBName",$this->user,$this->password);
                //Establecer el modo error del PDO a excepcion
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
            return $conn;
        }

        public function cerrarConexion(){
             $conn = null; 
        }

    }
   
?>