<?php

require_once "../banco/conexao.php";
require_once "faz_upload.php";
    
    $id = $_POST['idfilme'];
    $titulo = $_POST['titulo'];
    $sinopse = $_POST['sinopse'];
    $anolancamento = $_POST['anolancamento'];
    $diretor = $_POST['diretor'];

    $SQL = "UPDATE `filme` SET `titulo`=?, `sinopse`=?, `anolancamento`=?, `diretor`=? WHERE  `idfilme`=?;";

echo $SQL;

    $comando = $conexao->prepare($SQL);

    $comando->bind_param("ssssi", $titulo , $sinopse , $anolancamento , $diretor , $id); 

    $comando->execute();

header('location: index.php');

?>