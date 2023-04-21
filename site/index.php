<?php
include "menu.php";
include "cabecalho.php"
?>

<div class="container-fluid banner">
  <div id="carouselExample" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/foto2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/foto4.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/foto3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container mt-2">
  <div class="row">
    <div class="col-12 text-center">
      <h1>Jogos em Destaque</h1>
    </div>
    <div class="col-12 text-center">
      <p>Lorem ipsum, dolor sit amet
        consectetur adipisicing elit.
        Nisi sapiente id ut impedit
        inventore vitae! Dolorum eius,
        in dignissimos amet omnis,
        explicabo voluptates laboriosam
        cumque harum doloremque unde odio adipisci!
      </p>
    </div>

  </div>
  <div class="row">
    <?php
    for ($i = 0; $i < 8; $i++) :

    ?>
      <div class="col-md-3 text-center mb-4">
        <img src="img/foto10.png" alt="" class="img-fluid">
        <h5 class="mt-3 mb-3">Nome do Jogo</h5>
        <a href="nomedojogo.php" class="btn btn-outline-primary">VER-MAIS </a>
      </div>
    <?php
    endfor;
    ?>

  </div>
  <div class="row mt-5 text-center">
    <di class="col-12 ">
      <h2>Entre em contato</h2>
    </di>
    <di class="col-12 ">
      <p>Lorem ipsum dolor sit amet
        consectetur adipisicing elit. Aut cumque iste
        obcaecati, hic sit nesciunt quam nulla quidem
        voluptatem officia rem ipsam ab cum accusantium
        illum odit quaerat quisquam vel.</p>
    </di>
  </div>
  <div class="row">
    <form action="inserir-contato.php" method="post">
      <div class="col">
        <div class="mb-3">
          <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <div class="mb-3">
          <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
        </div>
        <div class="mb-2">
          <textarea class="form-control" name="duvida" placeholder="Duvida" rows="4"></textarea>
        </div>
        <div class="mb-2 text-center">
          <button type="submit" class="btn btn-success w-25">Entar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
 
</html>