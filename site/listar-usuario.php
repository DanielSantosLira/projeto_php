<?php

include "cabecalho.php";
include "menu-sistema.php";

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de Usuárrio</h1>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <table class="table table-hover tabla-primary">
                    <tr class="table-primary">
                        <td class="table-primary">id</td>
                        <td class="table-primary">Nome</td>
                        <td class="table-primary">E-mail</td>
                        <td class="table-primary">Acões</td>
                    </tr>
                    <?php
                    include "conexao.php";
                    $sql_buscar = "select * from usuario";

                    $todos_os_usuario = mysqli_query($conexao, $sql_buscar);

                    while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
                    ?>
                        <tr>
                            <td><?php echo $um_usuario["id"]; ?></td>
                            <td><?php echo $um_usuario["nome"]; ?></td>
                            <td><?php echo  $um_usuario["email"]; ?></td>
                            <td>
                                <a href="excluir-usuario.php?id=<?php echo $um_usuario["id"]; ?>">
                                    <img src="img/delete_icon.png" alt="" width="20">
                                </a>
                                <a href="ver-usuario.php?id=<?php echo $um_usuario["id"]; ?>"><img src="img/lopa.png" alt="" width="30px" class="rounded float-left"></a>
                                <a href="editar-usuario.php?id=<?php echo $um_usuario["id"]; ?>"><img src="img/edit.png" alt="" width="30px" class="rounded float-left"></a>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                    mysqli_close($conexao);
                    ?>
                </table>
            </div>
        </div>