<h1> request method : GET </h1>

<?php

$resposta1 = $_POST["n1"];
$resposta2 = $_POST["n2"];

if($resposta1 == "admin" && $resposta2==123){
    echo "logado";
}else{
    echo "senha ou usuario incorreto";
}

?>