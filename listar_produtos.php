<?php
 require_once 'config.php'; 
 include_once "cabecalho.html"; 

$consulta = $conexao->prepare('SELECT * FROM tabprodutos');
$consulta->execute();
?>
<title>Lista de Produtos</title>
</head>

<body>
   <h2>Listagem de produtos</h2>
   <table>
      <tr>
         <th>ID</th>
         <th>Descrição</th>
         <th>Imagem</th>
         <th>Preço</th>
         <th colspan="2">Ações</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<td>{$linha['proId']}</td>";
         echo "<td>{$linha['proDescricao']}</td>";
         echo "<td>{$linha['proImagem']}</td>";
         echo "<td>{$linha['proPreco']}</td>";
        echo "<td><a href='alterar_produto.php?id={$linha['proId']}' class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
        echo "<td><a href='exclui_produto.php?id={$linha['proId']}' class='btn-floating blue'><i class='material-icons'>delete</i></a></td></tr>";
      }
      echo "</table>";
      echo "<a href='form_cad_produto.php' class='btn'>Adicionar produto</a>";
      ?>



