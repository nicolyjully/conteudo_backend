<?php
require_once "../banco/conexao.php";


$sql = "SELECT * FROM noticia"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$noticias = [];
while ($noticia = $resultado->fetch_object()){
    $noticias[] = $noticia; }
