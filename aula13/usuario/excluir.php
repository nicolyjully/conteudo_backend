<?php
require_once "../conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM `usuario` WHERE  `idusuario`= ?;"; 

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

header('location: ../usuarios.php');