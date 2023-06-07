<?php
require_once "../banco/conexao.php" 
$sql = "SELECT distinct categoria FROM filme"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$categorias = [];
while ($filme = $resultado->fetch_object()){
    $categorias [] = $filme; }
