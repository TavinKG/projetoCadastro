<?php
include_once 'cabecalho.html';
include_once 'config.php';

function mostrarDados($linha)
{
   echo "<div class='col s12 m4'>";
   echo "<div class='card'>";
   echo "<div class='card-image'>";
   echo "<td><img src='imagens/{$linha['proImagem']}.jpg'><br></div>";
   echo "<div class='card-content'><p>Descrição do Card 3</p></div>";
   echo "<div class='card-action'><a href='#' class='btn'>Botão 3</a></div></div>";
}
echo "<h3>Produtos para venda</h3>";
echo "<hr>";
$consulta = $conexao->prepare('SELECT * FROM tabprodutos');
$consulta->execute();
$f = $consulta->rowCount();

echo "<table class='responsive-table centered'>";
$li = 1;
echo "<tr>";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
   echo "<td><img src='imagens/{$linha['proImagem']}'><br>";
   echo "<a href='carrinho.php?codigo={$linha['proId']}'>{$linha['proDescricao']}</a><br>";
   echo "R$ {$linha['proPreco']}<br>";

   echo "<a href='carrinho.php?codigo={$linha['proId']}' class='waves-effect waves-light btn'>Comprar";
   echo "<i class='small material-icons'>local_grocery_store</i></a>";
?>   

      <!--
  Sizes:
  tiny: 1rem
  small: 2rem
  medium: 4rem
  large: 6rem
  -->

  
   </td>
<?php
   $li++;
   if ($li == 4) {
      $li = 1;
      echo "</tr><tr>";
   }
}
echo "</table>";
include_once "rodape.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <style>
         img {
            max-width: 250px;
            height: auto;
         }


   </style>

</head>
<body>
   
</body>
</html>