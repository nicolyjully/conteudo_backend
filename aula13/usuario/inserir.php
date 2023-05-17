<?php
require_once "../conexao.php";

if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"])){

require_once "faz_upload.php";

$nome = $_POST["n1"];
$login = $_POST["n2"];
$senha = password_hash($_POST["n3"], PASSWORD_BCRYPT);

$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `foto`) VALUES (?, ?, ?, ?);";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssss", $nome , $login , $senha, $nome_foto); 

$comando->execute();

}
header('location: ../usuarios.php');