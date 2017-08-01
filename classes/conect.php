<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "CRUDBD";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Algo errado na conexão com o banco: " . $conn->connect_error);
}
			
			
?>