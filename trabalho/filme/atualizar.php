<?php
require_once "../banco/conexao.php";
require_once "faz_upload.php";
$id = $_POST['idfilme'];
$titulo = $_POST['titulo'];
$codigo = $_POST['codigo'];
$sinopse = $_POST['sinopse'];
$lançamento = $_POST['lançamento'];
$diretor = $_POST['diretor'];
$foto = $nome_foto;

$sql = "UPDATE `filme` SET `titulo`=?, `codigo`=?, `sinopse`=?, `lançamento`=?, `diretor`=?, foto=? WHERE  `idfilme`=?;";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssssi", $titulo , $codigo, $sinopse ,$lançamento, $diretor, $foto,  $id); 

$comando->execute();

header('location: index.php');