<?php

//importa arquivo
require_once "../banco/conexao.php";

if(isset($_POST["titulo"]) && isset($_POST["sinopse"]) && isset($_POST["anolancamento"]) && isset($_POST["diretor"])){
//faz upload da foto do usuário
require_once "faz_upload.php";

$titulo = $_POST["titulo"];
$sinopse = $_POST["sinopse"];
$anolancamento = $_POST["anolancamento"];
$diretor = $_POST["diretor"];
$foto = $nome_foto;


$SQL = "INSERT INTO `filme` (`titulo`, `sinopse`, `anolancamento`, `diretor`, foto) VALUES (?, ?, ?, ?, ?);";


//
$comando = $conexao->prepare($SQL);

//Faz vinculação dos parâmetros
$comando->bind_param("sssss", $titulo , $sinopse , $anolancamento, $diretor, $foto); 

$comando->execute();

}
header('location: index.php');