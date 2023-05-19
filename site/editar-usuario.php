<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET['id'];
 $nome = $email = $senha= "";
include "conexao.php";
$sql_buscar = "select * from usuario  where id = $id";
$todos_os_usuario = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
    $nome = $um_usuario["nome"];
    $email = $um_usuario["email"];
    $senha =$um_usuario["senha"];
    
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
        <form action="salvar-usuario-editado.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nome</label><input name="nome" value="<?php echo $nome; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                E-mail <input name="email" value="<?php echo $email; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Senha</label> <input type="password" name="senha" value="<?php echo $senha; ?>" class="form-control">
            </div>
          
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
