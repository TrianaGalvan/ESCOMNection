<?php
    require($_SERVER["DOCUMENT_ROOT"]."/lib/model/Usuario.php");
	require($_SERVER["DOCUMENT_ROOT"]."/lib/services/serviceUsuario.php");
	require($_SERVER["DOCUMENT_ROOT"]."/lib/common/config.php");
	
    //Obteniendo los parametros 
    $user = $_POST["username"];
    $pass = $_POST["password"];
	
    
    $usuarioBuscar = new Usuario($user,$pass);
    $usuarioEncontrado = new Usuario();
	$servicio = new ServicioUsuario();
    $usuarioEncontrado = $servicio->buscarUsuario($usuarioBuscar);
    
    //Verificando que el usuario no sea nulo 
    
    $userEncontrado = $usuarioEncontrado->getNombre();
	$passEncontrado = $usuarioEncontrado->getPassword();
	$rolEncontrado = $usuarioEncontrado->getRol();
	
		
	//Verificando que el username y el password coincidan
    if((strcmp($userEncontrado,$user) == 0) && (strcmp($passEncontrado,$pass) == 0)){
    	session_start();
		//Colocando en session el username y el password 
		$_SESSION["username"] = $userEncontrado;
		HttpResponse::redirect('http://localhost:'.PORT.'/content_'. $rolEncontrado. '/bienvenida.php');			
     }
	//El username o el password no coinciden
    else{
        HttpResponse::redirect("http://localhost:".PORT."/index.php",array("error" => "nombre o usuario incorrecto"),false, HTTP_REDIRECT_PERM);
    }
 
?>