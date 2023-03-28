<h1> request method : GET </h1>

<?php

$resposta1 = $_GET["n1"];
$resposta2 = $_GET["n2"];

if($resposta1 == "admin" && $resposta2==123){
    echo "logado";
}else{
    echo "senha ou usuario incorreto";
}

?>