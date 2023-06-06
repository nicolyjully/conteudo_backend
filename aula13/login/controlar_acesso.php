<?php

//inicia a sessão - deve ser colocada sempre
//antes de manipular a váriavel $_SESSION 
session_start();

//verifica se existe uma váriavel chamada
//$SESSION com a key usuário, essa variável
//é criada no arquivo validar.php quando o 
//usuario digita o login e a senha corretamente
if(!isset($_SESSION['usuario'])){
 header("location: ../login/formulario.php");
}