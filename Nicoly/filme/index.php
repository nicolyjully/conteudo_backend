<?php require "consultar_todos.php";
  require_once "../template/cabecalho.php";
  require_once "../template/menu_restrito.php";

?>


    <div class="container">

    <h1>Filmes</h1>
    <hr>
    
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success" >Cadastrar Novo Filme</a>
</div>
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Ano Lançamento</th>
      <th scope="col">Diretor</th>
      <th scope="col">Foto</th>
      <th scope="col">Acões</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($filmes as $filme): ?>
    <tr>
      <td><?php echo $filme->titulo ?></td>
      <td><?php echo $filme->sinopse ?></td>
      <td><?php echo $filme->anolancamento ?></td>
      <td><?php echo $filme->diretor ?></td>
      <td><img src="../uploads/<?php echo $filme->foto ?>" height="25px"></td>
      <td class="text-end" width="25%">
        <a href="excluir.php?id=<?= $filme->idfilme?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</a>
        <a href="formulario.php?id=<?= $filme->idfilme?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?php require_once "../template/rodape.php"; ?>