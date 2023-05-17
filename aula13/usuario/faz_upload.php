<?php


$origem = $_FILES['n4']["tmp_name"];
$nome_foto = time().$_FILES['n4']["name"];
$destino = "../uploads/$nome_foto";

move_uploaded_file($origem, $destino);

header('location: ../usuarios.php');

?>