<?php
        require_once "../banco/conexao.php";


    $SQL = "SELECT distinct 'filme' FROM idfilme"; 

    $comando = $conexao->prepare($SQL);

    $comando->execute();

    $resultado = $comando->get_result();

    $titulos = [];
        while ($filme = $resultado->fetch_object()){
    $titulos [] = $filme; }

?>