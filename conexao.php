<?php

$hostname = "localhost";
$bancodedados = "login";
$user = "root";
$pass = '';

$con = new mysqli ($hostname, $user , $pass , $bancodedados);
if($con->connect_errno){
    echo "falha ao conectar: ('. $con->connect_errono ') " . $con->connect_errno;
}

/* outro modo de canexão

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DATABASE', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA,DATABASE) or die ('Não foi possivel conectar.');*/
