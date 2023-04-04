<?php 
include_once  "dados.php";
include_once  "header.php";
include_once "menu.php";
?>


  

  <!-- noticias -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-3">

    <?php foreach($noticias as $noticia): ?>
   <div class="col">
  <div class="card" >
  <img src="<?php echo  $noticia["foto"];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Ler mais</a>
  </div>
</div>
    </div>
<?php endforeach; ?>
    </div>
</div>
<!-- fim noticias -->
<?php include_once  "rodape.php"?>
