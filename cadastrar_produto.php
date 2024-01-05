<?php 
  require_once 'config.php';
 
 if(isset($_POST['btncadastrar'])){
    $id = filter_input(INPUT_POST,'txtid');
    $descricao = filter_input(INPUT_POST,'txtdescricao');
    $imagem = filter_input(INPUT_POST,'txtimagem');
    $preco = filter_input(INPUT_POST,'txtpreco');
    
    $sql = $conexao -> prepare("INSERT INTO tabprodutos (proId,proDescricao,proImagem,proPreco) VALUES (:id, :descricao, :imagem, :preco)");
    $sql -> bindValue (':id', $id);
    $sql -> bindValue (':descricao', $descricao);
    $sql -> bindValue (':imagem', $imagem);
    $sql -> bindValue (':preco', $preco);
    $sql -> execute();
    header('Location:listar_produtos.php');
}
?>