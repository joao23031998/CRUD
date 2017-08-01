<?php
require_once __DIR__ . "/vendor/autoload.php";

use App\Usuario;

$user = new Usuario('João Paulo', 'joao23031998@gmail.com', '54321', '23/03/1998');

$user->save();