<?php

require_once "../banco/conexao.php";

$sql = "SELECT * FROM filme"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$filmes = [];
while ($filme = $resultado->fetch_object()){
    $filmes[] = $; }
