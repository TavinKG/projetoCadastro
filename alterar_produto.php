<?php
     require_once 'config.php'; 
     include_once "cabecalho.html";

     $codigo = $_GET['id'];
     $consulta = $conexao ->prepare('SELECT * FROM tabprodutos WHERE proId = :id');
     $consulta->bindValue(':id', $codigo);
     $consulta->execute();

     $linha = $consulta->fetch(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="row">
   <div class="col s12 m6 push-m3">
      <h3 class="light">Alterando produtos</h3>
      <?php echo "ID: {$linha['proId']}"; ?>
      <form action="altera_produto_action.php" method="post">
        
         <input type="hidden" name="txtid" value="<?php echo "{$linha['proId']}";?>">
      
         <div class="input-field col s12">
            <label for="descricao">Descrição: </label><br>
            <input type="text" name="txtdescricao" id="descricao" value="<?php echo "{$linha['proDescricao']}";?>">
         </div>
    
         <div class=" input-field col s12">
            <label for="foto">Foto: </label><br><br>
            <input type="file" name="txtimagem" id="imagem" accept="image/*" value="<?php echo "{$linha['proImagem']}";?>">
         </div>
   
         <div class=" input-field col s12">
            <label for="text">Preço: </label><br>
            <input type="text" name="txtpreco" id="preco" value="<?php echo "{$linha['proPreco']}";?>">
         </div>
      
         <button type=" submit" class="btn" name="btnalterar">Alterar </button>
         <a href="listar_produtos.php" class="btn green">Listar produtos</a>
      </form>

   </div>

</body>
</html>