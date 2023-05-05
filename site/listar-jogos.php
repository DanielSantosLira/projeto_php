<?php

include "cabecalho.php";
include "menu-sistema.php";

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de jogos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover tabla-primary">
                <tr class="table-primary">
                    <td class="table-primary">Codigo</td>
                    <td class="table-primary">Título</td>
                    <td class="table-primary">Categori</td>
                    <td class="table-primary">Acões</td>
                </tr>
                <?php
                include "conexao.php";
                $sql_buscar = "select * from jogo";

                $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

                while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
                ?>
                    <tr>
                        <td><?php echo $um_jogo["id"]; ?></td>
                        <td><?php echo $um_jogo["titulo"]; ?></td>
                        <td><?php echo $um_jogo["categoria"]; ?></td>
                        <td>
                            <a href="excluir-jogos.php?id=<?php echo $um_jogo["id"];?>">
                                <img src="img/delete_icon.png" alt="" width="20">
                            </a>
                        </td>

                    </tr>
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>

</div>