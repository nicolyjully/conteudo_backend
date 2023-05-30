<?php
require_once "../banco/conexao.php";
require_once "faz_upload.php";
$id = $_POST['idnoticia'];
$titulo = $_POST['titulo'];
$materia = $_POST['materia'];
$categoria = $_POST['categoria'];
$foto = $nome_foto;

$sql = "UPDATE `noticia` SET `titulo`=?, `materia`=?, `categoria`=?, foto=? WHERE  `idnoticia`=?;";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssssi", $titulo , $materia , $categoria ,$foto,  $id); 

$comando->execute();

header('location: index.php');