<?php
require_once "../banco/conexao.php";

if(isset($_GET["id"])){

$id = $_GET["id"];

$sql = "SELECT * FROM `noticia` WHERE  `idnoticia`= ?;"; 

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

$resultado = $comando->get_result();

$noticia = $resultado->fetch_object();

}