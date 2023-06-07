<?php
require_once "../banco/conexao.php";

if(isset($_GET["id"])){

$id = $_GET["id"];

$sql = "SELECT * FROM `filme` WHERE  `idfilme`= ?;"; 

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

$resultado = $comando->get_result();

$filme = $resultado->fetch_object();

}