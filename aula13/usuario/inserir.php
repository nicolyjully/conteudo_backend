<?php 

// importa o arquivo de conexão
 require_once "../conexao.php";

$SQL  = "INSERT INTO `db_catalogo_3infob`.`usuario` (`nome`, `login`, `senha`) VALUES ('nicoly', 'admin123', '123');";

//prepara o comando para ser executado no mysql 
$comando = $conexao-> prepare($SQL);


//executa o comando 
$comando->execute();