<?php
$id = $_GET["id"];
$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$video = $_POST["video"];
$categoria = $_POST["categoria"];
include "conexao.php";

$sql_iditar_jogo = "update jogo set titulo= '$titulo', foto='$foto', categoria='$categoria' , video='$video' where id = $id";

$um_jogo = mysqli_query($conexao, $sql_iditar_jogo);

header("location:listar-jogos.php?msg=sucesso");
?>