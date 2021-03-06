<?php
	
namespace App;

class Usuario{

	private $nome;
	private $email;
	private $senha;
	private $dataNascimento;

	public function __construct($nome, $email, $senha, $dataNascimento){
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
		$this->dataNascimento = $dataNascimento;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getSenha(){
		return md5($this->senha);
	}

	public function getDataNascimento(){
		return $this->dataNascimento;
	}

	public function save()
	{
		$conn = new Connect();
		
		$query = "INSERT INTO usuario (nome, email, senha, data_de_nascimento) 
		VALUES ('{$this->getNome()}', '{$this->getEmail()}', '{$this->getSenha()}', '{$this->getDataNascimento()}')";

		if ($conn->getConnection()->query($query) == true) {
			echo "Usuário criado com sucesso";
		} else {
			echo "Error: " . $query . "<br>" . $conn->getConnection()->error;
		}
	}

}

