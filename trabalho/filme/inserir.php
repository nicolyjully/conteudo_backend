<?php
//importa arquivo
require_once "../banco/conexao.php";

if(isset($_POST["titulo"]) && isset($_POST["sinopse"]) && isset($_POST["lancamento"])&& isset($_POST["diretor"])){
//faz upload da foto do usuário
require_once "faz_upload.php";

    $titulo = $_POST["titulo"];
$sinopse = $_POST["sinopse"];
$lançamento = $_POST["lançamento"];
$diretor = $_POST["diretor"];
$foto = $nome_foto;


$sql = "INSERT INTO `filme` (`titulo`, `sinopse`, `lançamento`,  `diretor`, `foto`) VALUES (?, ?, ?, ?);";


//
$comando = $conexao->prepare($sql);

//Faz vinculação dos parâmetros
$comando->bind_param("ssss", $titulo , $sinopse , $lançamento, $diretor, $foto); 

$comando->execute();

}
header('location: index.php');