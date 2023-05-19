<?php
include "conexao.php";

$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$video = $_POST["video"];
$categoria = $_POST["categoria"];


$sql_inserir_jogo = "insert into  jogo(titulo, foto, video, categoria) values('$titulo', '$foto',' $video', '$categoria')";

$um_jogo = mysqli_query($conexao, $sql_inserir_jogo);



mysqli_close($conexao);


header("location:novo-jogo.php?msg=sucesso");

?>