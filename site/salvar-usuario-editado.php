<?php
$id = $_GET["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senja = $_POST["senha"];

include "conexao.php";

$sql_iditar_usuario = "update usuario set nome= '$nome', email='$email',  senha='".md5($senha)."' where id = $id";

$um_usuario = mysqli_query($conexao, $sql_iditar_usuario);

header("location:listar-usuario.php?msg=sucesso");
?>