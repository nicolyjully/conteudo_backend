<?php 
require "consultar_todos.php";
  require_once "../template/cabecalho.php";

?>


    <div class="container">

    <h1>Filmes</h1>
    <hr>
    
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success" >Inserir Novo </a>
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">sinopse</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Diretor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($filmes as $filme): ?>
    <tr>
      <td><?php echo $filme->titulo ?></td>
      <td><?php echo $filme->sinopse ?></td>
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