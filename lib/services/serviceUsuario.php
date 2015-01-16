<?php
	class ServicioUsuario{
		 public function buscarUsuario($user){
	                $userDAO = new UsuarioDAO();
	                $usuarioEncontrado = new Usuario();
	                $usuarioEncontrado = $userDAO->consultarUsuario($user);
	                return $usuarioEncontrado;
	     }
	}
?>