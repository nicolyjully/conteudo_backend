<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito.php";
?>

   <h1>Cadastro de Filmes</h1>
    <hr>

    <div class="container">
    <form action="<?php echo isset($filme) ? "atualizar.php" : "inserir.php"; ?>" method="post" method="post" enctype="multipart/form-data">
    

        <input type="hidden" name="idfilme" id="n1" value="<?php echo $filme->idfilme ?? "" ;?>"><br>  

        <label class="form-label">Titulo</label><br>
        <input class= "form-control" type="text" name="titulo" id="titulo" value="<?php echo $filme->titulo ?? "" ;?>"><br>

        <label class="form-label">Diretor</label><br>
        <input class= "form-control" type="text" name="diretor" id="diretor" value="<?php echo $filme->diretor ?? "" ;?>"><br>

        <label class="form-label">Sinopse</label><br>
        <input class= "form-control" type="text" name="sinopse" id="sinopse" value="<?php echo $filme->sinopse ?? "" ;?>"><br>

        <label class="form-label">Ano Lancamento</label><br>
        <input class= "form-control" type="text" name="anolancamento" id="anolancamento" value="<?php echo $filme->anolancamento ?? "" ;?>"><br>
     

        <label class="form-label">Foto</label><br>
        <input class= "form-control" type="file" name="foto" id="foto" value="<?php echo $filme->foto ?? "" ;?>"><br>

        <button type="submit" class="btn btn-dark" >Inserir</button>
    </form>

</div>
    <?php require_once "../template/rodape.php"; ?>