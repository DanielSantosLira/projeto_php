

  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">iGame</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!--   <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                 </li>
          -->
        </ul>
        <?php
        $mesagem = $_GET["msg"] ?? "";
        if($mesagem == "erro"){
          echo "<em class='text-danger'>Usuário ou senha inválida</em>";
        }
        ?>
        <form action="login.php" class="d-flex" method="post">
          <input class="form-control me-2" type="email" placeholder="E-mail" aria-label="E-mail" name="email" id="email">

          <input class="form-control me-2" type="password" placeholder="Senha" aria-label="Senha" name="senha" id="senha">
          <button class="btn btn-outline-success me-2" type="submit">Entar</button>
          <a href="novo-usuario.php" class="btn btn-outline-primary me-2">Cadastrar</a>
        </form>
      </div>
    </div>
  </nav>
  