<?php
require_once "../conexao.php";

$nome = $_POST["n4"];
$nome = $_POST["n1"];
$login = $_POST["n2"];
$senha = password_hash($_POST["n3"], PASSWORD_BCRYPT);

$sql = "UPDATE `usuario` SET `nome`=?, `login`=?, `senha`=? WHERE  `idusuario`=?;";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssi", $nome , $login , $senha , $id); 

$comando->execute();

header('location: ../usuarios.php');