<?php 

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "Nicoly";
$port = 3306;

//cria uma conexão com o mysql 
$conexao = new mysqli($host, $user, $password, $database, $port);

if($conexao->connect_error){
    echo $conexao->connect_error;
    die();
}