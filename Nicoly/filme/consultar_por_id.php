<?php
require_once "../banco/conexao.php";

if(isset($_GET["id"])){

$id = $_GET["id"];

$SQL = "SELECT * FROM `filme` WHERE  `idfilme`= ?;"; 

$comando = $conexao->prepare($SQL);

$comando->bind_param("i", $id); 

$comando->execute();

$resultado = $comando->get_result();

$filme = $resultado->fetch_object();

}