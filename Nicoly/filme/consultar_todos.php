<?php
require_once "../banco/conexao.php";


$SQL = "SELECT * FROM filme"; 

$comando = $conexao->prepare($SQL);

$comando->execute();

$resultado = $comando->get_result();

$filmes = [];
while ($filme = $resultado->fetch_object()){
    $filmes[] = $filme; }
