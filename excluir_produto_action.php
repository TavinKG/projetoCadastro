<?php
 require_once 'config.php'; 
 include_once "cabecalho.html"; 

$codigo = $_GET['id'];
echo "codigo = ".$codigo;

$exclui = $conexao->prepare('DELETE FROM tabprodutos WHERE proId=:id');
$exclui->bindValue(':id', $codigo);
$exclui->execute();
header('Location: listar_produtos.php');

include_once "rodape.php";
?>
