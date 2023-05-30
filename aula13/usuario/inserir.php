<?php
require_once "../banco/conexao.php";

if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"])){
$nome = $_POST["n1"];
$login = $_POST["n2"];
$senha = password_hash($_POST["n3"], PASSWORD_BCRYPT);

require_once "faz_upload.php";
$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, foto) VALUES (?, ?, ?, ?);";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssss", $nome , $login , $senha, $nome_foto); 

$comando->execute();

}
header('location: index.php');