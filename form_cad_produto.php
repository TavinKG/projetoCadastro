<?php
 require_once 'config.php'; 
 include_once "cabecalho.html"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="css/estilos.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <title>Sysexemplo - Cadastro de Clientes</title>
</head>
<body>
   <div class="row ">
      <div class="col s12 m6 push-m3">

         <h3 class="light">Cadastro de Produtos</h3>
            <form action="cadastrar_produto.php" method="post">
            <div class="input-field col s12">
               <label for="id">ID: </label><br>
               <input type="text" name="txtid" id="id">
            </div>
            <div class="input-field col s12">
               <label for="descricao">Descrição: </label><br>
               <input type="text" name="txtdescricao" id="descricao">
            </div>
            <div class="input-field col s12">
               <label for="foto">Imagem: </label><br><br>
               <input type="file" name="txtimagem" id="imagem" accept="image/*">
            </div>
            <div class="input-field col s12">
               <label for="preco">Preço: </label><br>
               <input type="text" name="txtpreco" id="preco">
            </div>

            <button type="submit" class="btn" name="btncadastrar">Cadastrar </button>            
            <a href="listar_produtos.php" class="btn">Listar produtos</a>     
            <a href="home.php" class="btn red" >Menu</a>     
          </form>
         </div>

      </body>
      </html>



