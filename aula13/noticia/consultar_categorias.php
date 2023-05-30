<?php
require_once "../banco/conexao.php";


$sql = "SELECT distinct categoria FROM noticia"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$categorias = [];
while ($noticia = $resultado->fetch_object()){
    $categorias [] = $noticia; }
