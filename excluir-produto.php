<?php

require "src/Model/Produto.php";
require "src/conexao-bd.php";
require "src/Repository/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST["id"]);

header("Location: admin.php");
?>