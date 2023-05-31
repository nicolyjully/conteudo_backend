<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito.php";
?>

   <h1>Cadastro de Noticias</h1>
    <hr>

    <div class="container">
    <form action="<?php echo isset($noticia) ? "atualizar.php" : "inserir.php"; ?>" method="post" method="post" enctype="multipart/form-data">
    

        <input type="hidden" name="idusuario" id="n1" value="<?php echo $noticia->idnoticia ?? "" ;?>"><br>  

        <label class="form-label">Título</label><br>
        <input class= "form-control" type="text" name="titulo" id="titulo" value="<?php echo $noticia->titulo ?? "" ;?>"><br>

        <label class="form-label">Matéria</label><br>
        <textarea class= "form-control"  name="materia" id="materia" ><?php echo $noticia->materia ?? "" ;?></textarea><br>

        <label class="form-label">Categoria</label><br>
        <input class= "form-control" type="text" name="categoria" id="categoria" value="<?php echo $noticia->categoria ?? "" ;?>"><br>

        <label class="form-label">Foto</label><br>
        <input class= "form-control" type="file" name="foto" id="foto" value="<?php echo $noticia->foto ?? "" ;?>"><br>

        <button type="submit" class="btn btn-dark" >Inserir</button>
    </form>

</div>
    <?php require_once "../template/rodape.php"; ?>