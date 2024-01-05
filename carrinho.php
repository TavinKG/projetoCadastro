<?php
include_once "cabecalho.html";
include_once "config.php";

echo "<h2>Carrinho de compra</h2>";
// Adiciona produto ao carrinho
if (isset($_GET['codigo'])) {
   $proId = $_GET['codigo'];
   $quant = 1;

   // Verifica se o produto já está no carrinho
   $stmt = $conexao->prepare("SELECT * FROM tabcarrinho WHERE carProId = :proId");
   $stmt->bindParam(':proId', $proId);
   $stmt->execute();
   
?>
   <table>
      <tr>
         <th>Item</th>
         <th>Produto</th>
         <th>Quantidade</th>

      </tr>

   <?php
   if ($stmt->rowCount() > 0) {
      // Atualiza a quantidade se o produto já estiver no carrinho
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $quant += $row['carQtde'];
      $stmt = $conexao->prepare("UPDATE tabcarrinho SET carQtde = :qt WHERE carProId = :prod");
   } else {
      // Adiciona o produto ao carrinho se não estiver lá
      $stmt = $conexao->prepare("INSERT INTO tabcarrinho (carProId, carQtde ) VALUES (:prod, :qt)");
   }

   $stmt->bindParam(':prod', $proId);
   $stmt->bindParam(':qt', $quant);
   $stmt->execute();
}
/* listando os dados adicionados ao carrinho
   */
$sql = "SELECT tabcarrinho.*, tabprodutos.proDescricao AS descricao FROM tabcarrinho INNER JOIN tabprodutos ON tabcarrinho.carProId = tabprodutos.proId";

$stmt = $conexao->prepare($sql);
$stmt->execute();
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
   echo "<tr><td>{$linha['carId']}</td>";
   echo "<td>{$linha['descricao']}</td>";
   echo "<td>{$linha['carQtde']}</td></tr>";
}
echo "</table>";

include_once "rodape.php";
?>
