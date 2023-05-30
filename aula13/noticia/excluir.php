<?php
require_once "../banco/conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM `noticia` WHERE  `idnoticia`= ?;"; 

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

header('location: index.php');