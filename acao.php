<?php
	function __autoload($classe){
		require_once('classes/'. $classe .'.php');
	}

	$user = new Usuario('João Paulo', 'joao23031998@gmail.com', '54321', '23/03/1998');

	$user->insereUsuario($user->getNome(), 
						 $user->getEmail(), 
						 $user->getSenha(), 
						 $user->getDataNascimento());

?>