<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho";
?>


   <h1>Cadastro de Usuario</h1>
    <hr>
    <form action="<?php echo isset($usuario) ? "atualizar.php" : "inserir.php"; ?>" method="post" method="post" enctype="multipart/form-data">
    

        <input type="hidden" name="idusuario" id="n1" value="<?php echo $usuario->idusuario ?? "" ;?>"><br>  

        <label for="">Nome</label><br>
        <input type="text" name="n1" id="n1" value="<?php echo $usuario->nome ?? "" ;?>"><br>

        <label for="">Login</label><br>
        <input type="text" name="n2" id="n2" value="<?php echo $usuario->login ?? "" ;?>"><br>

        <label for="">Senha</label><br>
        <input type="password" name="n3" id="n3" value="<?php echo $usuario->senha ?? "" ;?>"><br>

        <label for="">foto</label><br>
        <input type="file" name="n3" id="n3" value="<?php echo $usuario->senha ?? "" ;?>"><br>

        <button type="submit">Cadastrar</button>
    </form>

    </div>
    
    <?php require_once "../template/rodape.php"; ?>
