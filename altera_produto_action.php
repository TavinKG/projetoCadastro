<?php
require_once 'config.php';
include_once "cabecalho.html";

$id = $_POST['txtid'];
$descricao = $_POST['txtdescricao'];
$imagem = $_POST['txtimagem'];
$preco = $_POST['txtpreco'];

echo "<h3>Alterando Dados do Produto</h3>";
echo "<h5>Produto = $id</h5>";

$altera = $conexao->prepare('UPDATE tabprodutos SET proDescricao = :descricao, proImagem = :imagem, proPreco = :preco WHERE proId = :id');
$altera->bindValue(':id', $id);
$altera->bindValue(':descricao', $descricao);
$altera->bindValue(':imagem', $imagem);
$altera->bindValue(':preco', $preco);
$altera->execute();

echo "<b>Descrição = </b>$descricao<br>";
echo "<b>Imagem = </b>$imagem<br>";
echo "<b>Preço = </b>$preco<br>";
echo "</div><br>";

echo "<a href='listar_produtos.php' class='btn'>Listagem de produtos </a>";
?>
