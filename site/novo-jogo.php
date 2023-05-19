<?php
include "cabecalho.php";
include "menu-sistema.php";

?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <h1>Cadastrar Novo Jogo</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <form action=" salvar-jogo.php" method="post">
                <div class="col-5 mx-auto">
                    <input type="text" name="titulo" class="form-control me-2" required placeholder="Titulo"> <br>
                    <input type="foto" name="foto" class="form-control me-2" required placeholder="foto"> <br>
                    <input type="vidio" name="vidio" class="form-control me-2" required placeholder="video"> <br>
                    <input type="categoria" name="categoria" class="form-control me-2" required placeholder="categoria"> <br>
                    <button type="submit" class="btn btn-success">Salvar jogo</button>
                   
                        <?php
                        $mesagem = $_GET["msg"] ?? "";
                        if ($mesagem == "sucesso") {
                            echo "<em class='alert alert-primary'>jogo  cadastrado com sucesso</em>";
                        }
                        ?>
                   
                </div>
            </form>
        </div>
    </div>
</div>