<?php
 require_once 'config.php';
 include_once "cabecalho.html";

$id = $_GET['id'];

$consulta = $conexao->prepare('SELECT * FROM tabprodutos WHERE proId = :id');
$consulta->bindValue(':id', $id);
$consulta->execute();

$linha = $consulta->fetch(PDO::FETCH_ASSOC);

$codigo = $id;
$descricao = $linha['proDescricao'];
$imagem = $linha['proImagem'];
$preco = $linha['proPreco'];

echo "<div class='row'>";
echo "<div class='col s12 m6 push-m3'>";
echo "<h2>Excluir produto?</h2>";
echo "<b>ID     = </b>$codigo<br>
      <b>Descrição       = </b>$descricao<br>
      <b>Imagem   = </b>$imagem<br>
      <b>Preço = </b>$preco<br>";
echo "<a href='listar_produtos.php' class='btn'>Listagem de produtos</a>";
echo "<a href='excluir_produto_action.php?id=$codigo' class='btn red'>Sim, excluir registro.</a>";
echo "</div></div></div>";
?>
