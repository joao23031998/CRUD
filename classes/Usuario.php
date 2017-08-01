<?php
	
	require_once 'conect.php';

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

		public function insereUsuario($nome, $email, $senha, $dataNascimento){
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			$query = "INSERT INTO usuario (nome, email, senha, data_de_nascimento) 
			VALUES ('{$nome}', '{$email}', '{$senha}', '{$dataNascimento}')";

			if ($conn->query($query) == true) {
    			echo "Usuário criado com sucesso";
			} else {
    			echo "Error: " . $query . "<br>" . $conn->error;
			}
		}

	}

?>

