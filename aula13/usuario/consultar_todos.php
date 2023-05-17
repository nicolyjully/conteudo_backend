<?php
require_once "conexao.php";


$sql = "SELECT * FROM usuario"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$usuarios = [];
while ($usuario = $resultado->fetch_object()){
    $usuarios[] = $usuario; }
