<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET['id'];
$titulo = $categoria = $foto = $video = "";
include "conexao.php";
$sql_buscar = "select * from jogo  where id = $id";
$todos_os_jogos = mysqli_query($conexao, $sql_buscar);
while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
    $titulo = $um_jogo["titulo"];
    $categoria = $um_jogo["categoria"];
    $video = $um_jogo["video"];
    $foto = $um_jogo["foto"];
endwhile;
mysqli_close($conexao);
?>

<div class="container mt-3">
    <div class="col-12">
        <h6>
            Editar do jogo Cód.: <?php echo $id; ?>
        </h6>
    </div>
    <div class="col-12">
        <form action="salvar-jogo-editado.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Titulo</label><input name="titulo" value="<?php echo $titulo; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                Foto :<input name="foto" value="<?php echo $foto; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Categoria</label> :<input name="categoria" value="<?php echo $categoria; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Video</label><input name="video" value="<?php echo $video; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>