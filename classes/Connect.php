<?php

namespace App;

class Connect {
	private $servername = "127.0.0.1";
	private $username = "root";
	private $password = "";
	private $dbname = "CRUDBD";
	private $conn;

	public function __construct()
	{
		$this->conn = new \mysqli($this->servername, $this->username, $this->password, $this->dbname);

		if ($this->conn->connect_error) {
		    die("Algo errado na conexão com o banco: " . $this->conn->connect_error);
		}
	}

	public function getConnection()
	{
		return $this->conn;
	}
}