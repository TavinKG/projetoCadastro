<?php
 require_once 'config.php'; // inclui a conexao do banco de dados
 include_once "cabecalho.html"; //inclui o materialize
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
</head>
<body>
   <div class="row ">
      <div class="col s12 m6 push-m3">

         <h3 class="light">Cadastro de Funcionários</h3>
            <form action="cadastrar_funcionarios.php" method="post">
            <div class="input-field col s12">
               <label for="nome">Nome: </label><br>
               <input type="text" name="txtnome" id="nome" required>

            </div>
            
            <div class="input-field col s12">
               <label for="senha">Senha: </label><br>
               <input type="password" name="txtsenha" id="senha" required>
            </div>

            <div class="input-field col s12">
               <label for="email">Email: </label><br>
               <input type="text" name="txtemail" id="email">
            </div>
           
            <div class="input-field col s12">
               <label for="cargo">Cargo: </label><br>
               <input type="text" name="txtcargo" id="cargo">
            </div>
           
            <div class="input-field col s12">
               <label for="usuario">Usuario: </label><br>
               <input type="text" name="txtusuario" id="usuario">
            </div>

            <div class="input-field col s12">
               <label for="foto">Foto: </label><br>
               <input type="text" name="txtfoto" id="foto">
            </div>
          
          
            <button type="submit" class="btn" name="btncadastrar">Cadastrar </button>            
            <a href="listar_funcionarios.php" class="btn">Listar funcionários</a>     
            <a href="home.php" class="btn green">Menu</a>          
          </form>
         </div>

      
      </body>
      </html>



