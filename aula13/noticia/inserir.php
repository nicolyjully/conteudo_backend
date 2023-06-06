<?php
require_once "../login/controlar_acesso.php";
//importa arquivo
require_once "../banco/conexao.php";

if(isset($_POST["titulo"]) && isset($_POST["materia"]) && isset($_POST["categoria"])){
//faz upload da foto do usuário
require_once "faz_upload.php";

    $titulo = $_POST["titulo"];
$materia = $_POST["materia"];
$categoria = $_POST["categoria"];
$foto = $nome_foto;


$sql = "INSERT INTO `noticia` (`titulo`, `materia`, `categoria`, `foto`) VALUES (?, ?, ?, ?);";


//
$comando = $conexao->prepare($sql);

//Faz vinculação dos parâmetros
$comando->bind_param("ssss", $titulo , $materia , $categoria, $foto); 

$comando->execute();

}
header('location: index.php');